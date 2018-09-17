<?php

namespace App\Http\Controllers;

use App\Calendar;
use App\Http\Requests\UploaderRequest;
use App\Message;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\RentSent;
//use Intervention\Image\Facades\Image;

class ProductsController extends Controller
{

    public function index(Request $request)
    {
        $user = Auth::user();

        $keyword = $request->input('site_search');
        #クエリ生成
        $query = Product::query();
        if (!empty($keyword)) {
            $query->where('title', 'like', '%' . $keyword . '%');
        }

        $products = $query->paginate(16);

        return view('products.index', ['products' => $products, 'user' => $user, 'keyword' => $keyword]);
    }

    public function show(Request $request, $id)
    {
        $t = $request->input('t');

        $user = Auth::user();
        $product = Product::findOrFail($id);


        return view('products.show', ['product' => $product, 'user' => $user, 't' =>$t]);
    }

    public function category($id)
    {
        $user = Auth::user();
        $products = Product::where('category_id', $id)->paginate(16);
        return view('products.index', ['products' => $products, 'user' => $user]);
    }

    public function create()
    {
        $user = Auth::user();
        $categories = [1,2,3];//TODO:定数化
        return view('products.create', compact('user', 'categories'));
    }

    public function confirm(UploaderRequest $req)
    {
        $user = Auth::user(); //TODO:これ全部にいる？

//        $image = Image::make($req->file('thum')->getRealPath());
//        $image->resize(523, null, function ($constraint) {
//            $constraint->aspectRatio();
//        });
//        $image->save(public_path() . "/img/product/tmp/" . $thum_name);

        $thum_name = uniqid("THUM_") . "." . $req->file('thum')->guessExtension(); // TMPファイル名
        $req->file('thum')->move(public_path() . "/img/product/tmp", $thum_name);
        $thum = "/img/product/tmp/".$thum_name;




        $data = $req->except('thum');
        $req->session()->put($data); // １）

        return view('products.confirm', compact("hash", "data", "user", "thum"));
    }

    public function store(Request $req)
    {
        $user = Auth::user();
        $data = session()->all();
        $product = new Product();
        $product->title = $data["title"];
        $product->description = $data["description"];
        $product->category_id = $data["category_id"];//TODO:category数値,文字列対応
        $product->url = $data["url"];
        $product->user_id = $user->id;
        $product->save();

        //レコードを挿入したときのIDを取得
        $lastInsertedId = $product->id;

        // ディレクトリを作成
        if (!file_exists(public_path() . "/img/product/" . $lastInsertedId)) {
            mkdir(public_path() . "/img/product/" . $lastInsertedId, 0777);
        }

        // 一時保存から本番の格納場所へ移動
        rename(public_path() . $req->thum, public_path() . "/img/product/" . $lastInsertedId . "/thum." .pathinfo($req->thum, PATHINFO_EXTENSION));



        $bunsyo = '出品';
        $bunsyo2 = '倉庫に商品を置きに行きましょう！';
        return view('thanksRent', compact('user', 'bunsyo', 'bunsyo2'));
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/users/listing');
    }

    public function edit(Request $request)
    {
        $user = Auth::user();
        //article/edit/123
        // ['article', 'edit', '123']
        $segments = $request->segments();
        // 123
        $id = array_pop($segments);
        $product = Product::find($id);
        return view("products.edit", ['product' => $product, 'user' => $user]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $segments = $request->segments();
        $id = array_pop($segments);
        $product = Product::find($id);

        $form = $request->all();
        $product->fill($form)->save();
        return view("products.show", ['product' => $product, 'user' => $user]);
    }

}
