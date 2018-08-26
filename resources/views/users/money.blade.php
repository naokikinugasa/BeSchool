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
                        <th>出品中</th>
                        <th class="text-center">金額</th>
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
                                    {{--TODO:借りたユーザー表示--}}
                                    {{--<div>Availability:--}}
                                    {{--<div class="d-inline text-success">In Stock</div>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </td>
                        <td class="text-center">¥{{$reservation->price}}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td>
                            <div class="product-item">
                                <div class="product-info">
                                    <p>合計</p>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">¥{{$user->money}}</td>
                    </tr>
                    </tbody>
                </table>

            </div>
            {{--<hr class="mb-4">--}}

            <div class="text-center"><a class="btn btn-primary margin-top-none" href="/transfer">送金申請</a></div>
        </div>

        <script>
            (function() {
                'use strict';

                var cmds = document.getElementsByClassName('remove-from-cart');
                var i;

                for (i = 0; i < cmds.length; i++) {
                    cmds[i].addEventListener('click', function(e) {
                        e.preventDefault();
                        if (confirm('削除しますか？')) {
                            document.getElementById('form_' + this.dataset.id).submit();
                        }
                    });
                }

            })();
        </script>

@endsection