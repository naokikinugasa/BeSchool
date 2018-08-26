<?php

namespace App\Http\Controllers;

use App\Product;
use App\Reservated_day;
use App\Reservation;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProductsRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\RentSent;

class ReservationsController extends Controller
{

    public function show(ProductsRequest $request, $id)
    {

        $user = Auth::user();
        $query = $request->query();
        $product = Product::findOrFail($id);

        return view('reservations.show', ["product" => $product, "query" => $query, "user" => $user]);
    }

    public function store(Request $request, $id)
    {
        $user = Auth::user();
        $product = Product::findOrFail($id);
        //TODO:同じ予約がないかチェック
        foreach ($request->day as $reservedDay) :
        $reservatedDay = new Reservated_day();
        $reservatedDay->product_id = $id;
        $reservatedDay->date = $reservedDay;
        $reservatedDay->user_id = $user->id;
        $reservatedDay->save();
        endforeach;
        //TODO:予約不可能機能をつける時に分離する
        $reservation = new Reservation();
        $reservation->product_id = $id;
        $reservation->user_id = $user->id;
        $reservation->start_date = $request->start_date;
        $reservation->end_date = $request->end_date;
        $reservation->price = $request->price;
        $reservation->save();

        $user->money += $request->price;
        $user->save();

        $title = '【予約確定】Shareの予約が確定しました。';
        $text = '予約が確定しました!
倉庫番号と鍵番号をご確認下さい。';
        $text2 = '予約内容
http://www.share-rental.com/users/renting';
        Mail::to($user->email)->send(new RentSent($title, $text, $text2));
        $host_text = $user->name . 'さんが予約しました。
予約内容
開始日：' . $request->start_date . '
返却日：' . $request->end_date;
        $host_text2 = '';
        Mail::to($product->getOwnerEmail())->send(new RentSent($title, $host_text, $host_text2));

        $bunsyo = '予約';
        $bunsyo2 = '予約日になりましたら、借りに行きましょう！';
        return view('thanksRent', compact('user','bunsyo', 'bunsyo2'));
    }


}
