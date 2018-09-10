@extends('layouts.user')
@section('title', 'マイページ')
@section('user_content')
        <div class="col-lg-8">
            <div class="padding-top-2x mt-2 hidden-lg-up"></div>
            <p>名前：{{$user->name}}</p>
            <div class="user-avatar"><a class="edit-avatar" href="#"></a>
                @if(isset($user->avatar))
                <img src="{{$user->avatar}}" alt="User">
                @else
                <img src="/img/user_default.png" alt="User">
                @endif
            </div>
            <p>性別：{{$user->sex}}</p>
            <p>生年月日：{{$user->birthday}}</p>
            <p>出身地：{{$user->birthplace}}</p>
            <p>在住地：{{$user->residence}}</p>
            <p>学歴：{{$user->academicbackground}}</p>
            <p>所属：{{$user->affliation}}</p>
            <p>キャッチコピー：{{$user->catchphrase}}</p>
            <p>人生で一番つらかったこと：{{$user->painful}}</p>
            <p>人生で一番やりきったこと：{{$user->worked}}</p>
            <p>将来ビジョン：{{$user->vision}}</p>
            <p>就職の有無：{{$user->finding}}</p>
        </div>
@endsection