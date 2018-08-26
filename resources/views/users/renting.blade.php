@extends('layouts.user')
@section('title', 'マイページ')
@section('user_content')
    <div class="col-lg-8">
        <div class="padding-top-2x mt-2 hidden-lg-up"></div>
        <!-- Wishlist Table-->
        <div class="table-responsive wishlist-table margin-bottom-none">
            <table class="table">
                <thead>
                <tr>
                    {{--//TODO:レンタル期間を過ぎたら自動で非表示--}}
                    <th>レンタル中</th>
                    <th class="text-center">返却日</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($reservations as $reservation)
                    @php($product = $reservation->product)
                    <tr>
                        <td>
                            <div class="product-item"><a class="product-thumb" href="/products/{{$product->id}}"><img src="{{$product->pic_thum()}}" alt="Product"></a>
                                <div class="product-info">
                                    <h4 class="product-title"><a href="/products/{{$product->id}}">{{$product->title}}</a></h4>
                                    レンタル期間：
                                    {{$reservation->start_date}} ~ {{$reservation->end_date}}
                                    <div class="text-lg text-medium">¥{{$reservation->price}}</div>
                                    {{--<div>Availability:--}}
                                    {{--<div class="d-inline text-success">In Stock</div>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </td>
                        <td class="text-center" style="color: red;">{{$reservation->end_date}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <hr class="mb-4">
        {{--<div class="custom-control custom-checkbox">--}}
            {{--<input class="custom-control-input" type="checkbox" id="inform_me" checked>--}}
            {{--<label class="custom-control-label" for="inform_me">Inform me when item from my wishlist is available</label>--}}
        {{--</div>--}}
    </div>

@endsection