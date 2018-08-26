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
                        <th class="text-center"><a class="btn btn-sm btn-outline-danger" href="#">削除</a></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($user->products as $product)
                    <tr>
                        <td>
                            <div class="product-item"><a class="product-thumb" href="/products/{{$product->id}}"><img src="{{$product->pic_thum()}}" alt="Product"></a>
                                <div class="product-info">
                                    <h4 class="product-title"><a href="/products/{{$product->id}}">{{$product->title}}</a></h4>
                                    <div class="text-lg text-medium text-muted">{{$product->price}}</div>
                                    {{--<div>Availability:--}}
                                        {{--<div class="d-inline text-success">In Stock</div>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </td>
                        <td class="text-center"><a class="remove-from-cart" href="#" data-toggle="tooltip" title="Remove item" data-id="{{ $product->id }}"><i class="icon-cross"></i></a></td>
                        <form method="post" action="{{ url('/products', $product->id) }}" id="form_{{ $product->id }}">
                            {{ method_field('delete') }}
                        </form>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <hr class="mb-4">
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