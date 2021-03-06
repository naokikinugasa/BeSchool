@extends('layouts.defalut')

@section('title', 'マイホーム')

@section('content')
    <div class="col-lg-8">
        <p>名前：{{$user->name}}</p>
        <div class="user-avatar"><a class="edit-avatar" href="#"></a>
            @if(null != $user->avatar())<!-- TODO:多分ログインuserのavatarが表示されてしまう   -->
            <img src="{{$user->avatar()}}" alt="User">
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
        <p>将来のビジョン：{{$user->vision}}</p>
        <p>就職の有無：{{$user->finding}}</p>
        <p>PR動画</p>
        <video src="/movie/user/{{$user->id}}/thum.mp4" controls></video>
        <!-- TODO:mp4前提になっている -->
    </div>

@endsection