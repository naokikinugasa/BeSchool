
@extends('layouts.app_company')


@section('content')
<!-- Page Content-->
<div class="container padding-bottom-3x mb-2">
    <div class="row">
        <div class="col-lg-4">
            <aside class="user-info-wrapper">
                <div class="user-info">
                    <div class="user-avatar"><a class="edit-avatar" href="#"></a>
                        @if(isset($company->avatar))
                        <img src="{{$company->avatar}}" alt="User">
                        @else
                        <img src="/img/user_default.png" alt="User">
                        @endif
                    </div>
                    <div class="user-data">
                        <h4>{{$company->name}}</h4>
                        <h4>{{$company->email}}</h4>
                        <h4>募集内容：{{$company->wantedcontents}}</h4>
                        <h4>面談可能スケジュール：{{$company->schedule}}</h4>
                        <span>{{$company->created_at}}</span>
                        {{--TODO:タイムスタンプ、時間削除--}}
                        <h4>PR動画</h4>
                        <video src="{{$company->pic_thum()}}"></video>
                    </div>
                </div>
            </aside>
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