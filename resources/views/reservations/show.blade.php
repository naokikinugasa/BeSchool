@inject('helper', 'App\Helper')
@extends('layouts.defalut')

@section('title', '予約確認')

@section('content')
    <div class="container padding-bottom-3x mb-2">
        <div class="row">
            <!-- Checkout Adress-->
            <div class="col-xl-9 col-lg-8">
                {{--<div class="checkout-steps"><a href="checkout-review.html">4. Review</a><a class="active" href="checkout-payment.html"><span class="angle"></span>3. Payment</a><a class="completed" href="checkout-shipping.html"><span class="step-indicator icon-circle-check"></span><span class="angle"></span>2. Shipping</a><a class="completed" href="checkout-address.html"><span class="step-indicator icon-circle-check"></span><span class="angle"></span>1. Address</a></div>--}}
                <h4>予約を確定しますか？</h4>
                <hr class="padding-bottom-1x">
                <div class="accordion" id="accordion" role="tablist">
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h6><a href="#card" data-toggle="collapse" data-parent="#accordion"><i class="icon-columns"></i>予約確認</a></h6>
                        </div>


                        <div id="container" style="margin-left: 20%; margin-right: 20%; margin-top: 10%;">
                            <div id="product">
                                <div class="topNaviColumn3">
                                    <img src="{{$product->pic_thum()}}">
                                    <h3 class="name">{{$product->title}}</h3>
                                </div><!-- /.topNaviColumn -->
                                <div class="syouhinsetumei">詳細：{{$product->honbun}}</div>

                                <form action='/reservation/reserve/{{$product->id}}' method='POST'>
                                        @php
                                            $startDate = date($query["start_date"]);
                                            $endDate = date($query["end_date"]);
                                            $diff = (strtotime($endDate) - strtotime($startDate)) / ( 60 * 60 * 24);
                                            for($i = 0; $i <= $diff; $i++) {
                                                $reservedDays[] = date('Y-m-d', strtotime($startDate . '+' . $i . 'days'));
                                            }
                                        @endphp
                                        @foreach ($reservedDays as $reservedDay)
                                            <input type="hidden" name="day[]" value="{{$reservedDay}}">
                                        @endforeach
                                        {{--TODO:コントローラーでもループ回している。どちらかだけにしたい。--}}



                                    <!-- Order Summary Widget-->
                                    <section class="widget widget-order-summary">
                                        <h3 class="widget-title">Order Summary</h3>
                                        <table class="table">
                                            <tr>
                                                <td>受取日：</td>
                                                <td class="text-medium">{{$query["start_date"]}}</td>
                                                <input type="hidden" name="start_date" value="{{$startDate}}">
                                            </tr>
                                            <tr>
                                                <td>返却日：</td>
                                                <td class="text-medium">{{$query["end_date"]}}</td>
                                                <input type="hidden" name="end_date" value="{{$endDate}}">
                                            </tr>
                                            <tr>
                                                <td>レンタル日数：</td>
                                                <td class="text-medium text-center">{{count($reservedDays)}}日</td>
                                            </tr>
                                            <tr>
                                                <td>料金：</td>
                                                <td class="text-medium text-center">¥{{$product->price_day}}</td>
                                            </tr>
                                            <tr>
                                                <td>手数料：</td>
                                                <td class="text-medium text-center">¥0</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="text-lg text-medium">
                                                    ¥{{$helper->countMinPrice($product->price_day, $product->price_week, $product->price_month, count($reservedDays))}}
                                                    {{--¥{{min( (count($reservedDays) - 1)*$product->price_day, $product->price_week, $product->price_month )}}--}}
                                                </td>
                                                <input type="hidden" name="price" value="{{$helper->countMinPrice($product->price_day, $product->price_week, $product->price_month, count($reservedDays))}}">
                                            </tr>
                                        </table>
                                        @if(count($reservedDays) > 1)
                                        <p class="text-right">※2日以上の場合、初日はレンタル料金には含まれません。</p>
                                        @endif
                                    </section>

                                    <div class="collapse show" id="card" role="tabpanel">
                                        <div class="card-body">
                                            <div class="col-sm-6 text-center" style="width: 100%; margin: auto;">
                                                <input class="btn btn-outline-primary btn-block margin-top-none" type="submit" value="確定">
                                            </div>
                                        </div>
                                    </div>

                                </form>


                            </div>
                        </div>


                    </div>
                </div>
                {{--<div class="checkout-footer margin-top-1x">--}}
                    {{--<div class="column"><a class="btn btn-outline-secondary" href="checkout-shipping.html"><i class="icon-arrow-left"></i><span class="hidden-xs-down">&nbsp;Back</span></a></div>--}}
                    {{--<div class="column"><a class="btn btn-primary" href="checkout-review.html"><span class="hidden-xs-down">Continue&nbsp;</span><i class="icon-arrow-right"></i></a></div>--}}
                {{--</div>--}}
            </div>
            <!-- Sidebar          -->
            <div class="col-xl-3 col-lg-4">
                <aside class="sidebar">
                    <div class="padding-top-2x hidden-lg-up"></div>

                    <!-- Promo Banner-->
                    <section class="promo-box" style="background-image: url(img/banners/02.jpg);"><span class="overlay-dark" style="opacity: .4;"></span>
                        <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                            <h4 class="text-light text-thin text-shadow">New Collection of</h4>
                            <h3 class="text-bold text-light text-shadow">Sunglasses</h3><a class="btn btn-outline-white btn-sm" href="shop-grid-ls.html">Shop Now</a>
                        </div>
                    </section>
                </aside>
            </div>
        </div>
    </div>
@endsection