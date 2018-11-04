@extends('layouts.user')
@section('title', 'マイページ')
@section('user_content')
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 profile">
            <div class="prof_head_box">
                <p>{{$user->name}}</p>
                @if(array_key_exists('avatar', $user))
                <div class="user-avatar"><a class="edit-avatar" href="#"></a>
                    @if(isset($user->avatar))
                    <img src="{{$user->avatar}}" alt="User">
                    @else
                    <img src="/img/user/thum.jpg" alt="User">
                    @endif
                </div>
                @endif
            </div>
            <div class="prof_box">
                <div class="prof_item">
                    <p class="prof_item_title"><span class="onepoint">性</span>別：</p>
                    <p>{{$user->sex}}</p>
                </div>

                <div class="prof_item">
                    <p class="prof_item_title"><span class="onepoint">キ</span>ャッチコピー：</p>
                    <p>{{$user->catchphrase}}</p>
                </div>

                <div class="prof_item">
                    <p class="prof_item_title"><span class="onepoint">P</span>R動画：</p>
                    <p></p>
                </div>

                <div class="prof_item">
                    <p class="prof_item_title"><span class="onepoint">自</span>己紹介：</p>
                    <p></p>
                </div>

                <div class="prof_item">
                    <p class="prof_item_title"><span class="onepoint">生</span>年月日：</p>
                    <p>{{$user->birthday}}</p>
                </div>

                <div class="prof_item place_box">
                    <div class="place_item">
                        <p class="prof_item_title"><span class="onepoint">出</span>身地：</p>
                        <p>{{$user->birthplace}}</p>
                    </div>
                    <div class="place_item">
                        <p class="prof_item_title"><span class="onepoint">在</span>住地：</p>
                        <p>{{$user->residence}}</p>
                    </div>
                </div>

                <div class="prof_item">
                    <p class="prof_item_title"><span class="onepoint">学</span>歴：</p>
                    <p>{{$user->academicbackground}}</p>
                </div>

                <div class="prof_item">
                    <p class="prof_item_title"><span class="onepoint">所</span>属：</p>
                    <p>{{$user->affiliation}}</p>
                </div>

                <div class="prof_item">
                    <p class="prof_item_title"><span class="onepoint">人</span>生で一番やりきったこと：</p>
                    <p>{{$user->worked}}</p>
                </div>

                <div class="prof_item">
                    <p class="prof_item_title"><span class="onepoint">将</span>来のビジョン：</p>
                    <p>{{$user->vision}}</p>
                </div>

                <div class="prof_item">
                    <p class="prof_item_title"><span class="onepoint">人</span>生で一番つらかったこと：</p>
                    <p>{{$user->painful}}</p>
                </div>

                <div class="prof_item">
                    <p class="prof_item_title"><span class="onepoint">就</span>職の有無：</p>
                    <p>{{$user->finding}}</p>
                </div>
            </div>
            <div class="to_edit">
                <a href="{{ action('UsersController@edit') }}">編集</a>
            </div>
        </div>
@endsection