
@extends('layouts.app_company')


@section('content')
<!-- Page Content-->
<div class="container padding-bottom-3x mb-2">
    <div class="row">
        <div class="col-lg-4">
            <aside class="user-info-wrapper">
                <div class="user-info">
                    @if(array_key_exists('avatar', $company))
                    <div class="user-avatar"><a class="edit-avatar" href="#"></a>
                        @if(isset($company->avatar))
                        <img src="{{$user->avatar}}" alt="User">
                        @else
                        <img src="/img/user_default.png" alt="User">
                        @endif
                    </div>
                    @endif
                    <div class="user-data">
                        <h4>{{$company->name}}</h4>
                    </div>

                    <div>
                        <a href="{{ action('ProductsController@create') }}">投稿する</a>
                    </div>

                    <div class="prof_box">
                        <div class="prof_item">
                            <p class="prof_item_title"><span class="onepoint">P</span>R動画：</p>
                            <p></p>
                        </div>

                        <div class="prof_item">
                            <p class="prof_item_title"><span class="onepoint">募</span>集内容：</p>
                            <p>{{$company->wantedcontents}}</p>
                        </div>

                        <div class="prof_item">
                            <p class="prof_item_title"><span class="onepoint">面</span>談可能スケジュール：</p>
                            <p>{{$company->schedule}}</p>
                        </div>

                        <div class="prof_item">
                            <p class="prof_item_title"><span class="onepoint">講</span>義動画：</p>
                            <p></p>
                        </div>
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