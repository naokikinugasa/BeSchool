@extends('layouts.user')
@section('title', 'マイページ')
@section('user_content')
<div class="col-lg-8 edit">
    <div class="padding-top-2x mt-2 hidden-lg-up"></div>
    <h4>{{$user->name}}</h4>
    @if(array_key_exists('avatar', $user))
    <div class="user-avatar"><a class="edit-avatar" href="#"></a>
        @if(isset($user->avatar))
        <img src="{{$user->avatar}}" alt="User">
        @else
        <img src="/img/user_default.png" alt="User">
        @endif
    </div>
    @endif

    <form action="edit" method="post" class="edit_company">
    {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-10 col-md-offset-1 control-label">名前</label>

            <div class="col-md-10 col-md-offset-1">
                <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}" required autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-10 col-md-offset-1 control-label">メールアドレス</label>

            <div class="col-md-10 col-md-offset-1">
                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('wantedcontents') ? ' has-error' : '' }}">
            <label for="wantedcontents" class="col-md-10 col-md-offset-1 control-label">募集内容</label>

            <div class="col-md-10 col-md-offset-1">
                <input id="email" type="text" class="form-control" name="wantedcontents" value="{{ $user->wantedcontents }}">

                @if ($errors->has('wantedcontents'))
                    <span class="help-block">
                        <strong>{{ $errors->first('wantedcontents') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('schedule') ? ' has-error' : '' }}">
            <label for="schedule" class="col-md-10 col-md-offset-1 control-label">面談可能スケジュール</label>

            <div class="col-md-10 col-md-offset-1">
                <input id="email" type="text" class="form-control" name="schedule" value="{{ $user->schedule }}">

                @if ($errors->has('schedule'))
                    <span class="help-block">
                        <strong>{{ $errors->first('schedule') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-3 submit">
                <button type="submit" class="btn btn-primary">
                    更新
                </button>
            </div>
        </div>
    </form>
</div>
@endsection