@extends('layouts.defalut')
@section('content')
<!-- Page Content-->
<div class="container padding-bottom-3x mb-2">
    <div class="row">
        <div class="col-lg-4">
            <aside class="user-info-wrapper">
                {{--<div class="user-cover" style="background-image: url(img/account/user-cover-img.jpg);">--}}
                    {{--<div class="info-label" data-toggle="tooltip" title="You currently have 290 Reward Points to spend"><i class="icon-medal"></i>290 points</div>--}}
                {{--</div>--}}
                <div class="user-info">
                    <div class="user-avatar"><a class="edit-avatar" href="#"></a>
                        @if(isset($user->avatar))
                        <img src="{{$user->avatar}}" alt="User">
                        @else
                        <img src="/img/user_default.png" alt="User">
                        @endif
                    </div>
                    <div class="user-data">
                        <h4>{{$user->name}}</h4><span>{{$user->created_at}}</span>
                        {{--TODO:タイムスタンプ、時間削除--}}
                    </div>
                </div>
            </aside>
            <nav class="list-group">
                {{--<a class="list-group-item " href="account-orders.html"><i class="icon-bag"></i>Orders</a>--}}
                <a class="list-group-item" href="/users"><i class="icon-head"></i>Profile</a>
                <a class="list-group-item " href="/users/money"><i class="icon-tag"></i>売上金</a>
                <a class="list-group-item" href="/users/renting"><i class="icon-map"></i>レンタル中の商品</a>
                <a class="list-group-item " href="/users/listing"><i class="icon-tag"></i>出品中の商品</a>
                {{--<a class="list-group-item " href="/users/wishing"><i class="icon-heart"></i>いいね!一覧</a>--}}
            </nav>
        </div>

        @yield('user_content')

    </div>
</div>

    <script>
        $j(document).ready(function() {
            if(location.pathname.split("/")[2]) {
                $j('a[href^="/users/' + location.pathname.split("/")[2] + '"]').addClass('active');
            } else {
                $j('a[href = "/users"]').addClass('active');
            }
        });
    </script>
@endsection