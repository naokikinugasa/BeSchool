@extends('layouts.defalut')

@section('title', 'マイホーム')

@section('content')
    <div class="container" style="background: #EEEEEE; border: solid white;">
        <div id="mypage" style="margin-bottom: 100px;">
            <h3 style="padding:3%;text-align: center;">マイページ</h3>
            <ul>
                {{--<div style="width:100px;height:100px;margin-left: auto;--}}
	  {{--margin-right: auto;">--}}
                    {{--<img src="images/@if (isset($user->gazou))--}}
                        {{--{{$user->gazou}}--}}
                    {{--@else--}}
                        {{--echo "default.png";--}}
                    {{--}?>" style="border-radius: 50px;--}}
	  {{--height: 100px;--}}
	  {{--width: 100%;" />--}}
                {{--</div>--}}
                <li>ニックネーム:{{$user->name}}</li>
                <li>メールアドレス:{{$user->email}}</li>
                <h3>出品している商品</h3>
                @foreach ($user->products as $product)
                <a href="template.php?id={{$product->id}}">
                    <div class="topNaviColumn2">
                        <div class="topNaviPhoto2"><img src="{{$product->pic_thum()}}" alt="" /></div>
                        <p style="padding:0 5%;"class="topNaviDetail2">
                            {{$product->title}}
                        </p><br><p style="padding:0 5%;">{{$product->price}}</p>
                    </div>
                </a>
                @endforeach
            </ul>
            <a class="myButtonlog2" href="exhit.php">出品する</a>


        </div>
        <div style="clear: both;"></div>
    </div>
@endsection