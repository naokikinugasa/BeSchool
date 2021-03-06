@extends('layouts.user')
@section('title', 'マイページ')
@section('user_content')
        <div class="col-lg-8">
            <div class="padding-top-2x mt-2 hidden-lg-up"></div>
            <p>名前：{{$user->name}}</p>
            <div class="user-avatar"><a class="edit-avatar" href="#"></a>
                @if($user->avatar() != NULL)
                <img src="{{$user->avatar()}}" alt="User">
                @else
                <img src="/img/user_default.png" alt="User">
                @endif
            </div>
            <form action="/company/edit" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name" class="col-md-4 control-label">名前</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}" required autofocus>

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

                    <div class="form-group row">
                        <label class="col-2 col-form-label" for="file-input">会社画像</label>
                        <div class="col-10">
                            <div class="custom-file">
                                <input class="custom-file-input" type="file" id="file-input" name="avatar">
                                <label class="custom-file-label" for="file-input">画像を選択</label>
                            </div>
                        </div>
                        @if($errors->has('avatar'))
                            <p style="color: red;">EROOR {{$errors->first('avatar')}}</p>
                        @endif
                    </div>

                    <div class="form-group row">
                        <label class="col-2 col-form-label" for="file-input">PR動画</label>
                        <div class="col-10">
                            <div class="custom-file">
                                <input class="custom-file-input" type="file" id="file-input" name="thum">
                                <label class="custom-file-label" for="file-input">動画を選択</label>
                            </div>
                        </div>
                        @if($errors->has('thum'))
                            <p style="color: red;">EROOR {{$errors->first('thum')}}</p>
                        @endif
                    </div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email" class="col-md-4 control-label">メールアドレス *非公開</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('wantedcontents') ? ' has-error' : '' }}">
    <label for="wantedcontents" class="col-md-4 control-label">募集内容</label>

    <div class="col-md-6">
        <input id="email" type="text" class="form-control" name="wantedcontents" value="{{ $user->wantedcontents }}">

        @if ($errors->has('wantedcontents'))
            <span class="help-block">
                <strong>{{ $errors->first('wantedcontents') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('schedule') ? ' has-error' : '' }}">
    <label for="schedule" class="col-md-4 control-label">面談可能スケジュール</label>

    <div class="col-md-6">
        <input id="email" type="text" class="form-control" name="schedule" value="{{ $user->schedule }}">

        @if ($errors->has('schedule'))
            <span class="help-block">
                <strong>{{ $errors->first('schedule') }}</strong>
            </span>
        @endif
    </div>
</div>



<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            更新
        </button>
    </div>
</div>
</form>
        </div>
@endsection