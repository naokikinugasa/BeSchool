@extends('layouts.app')

@section('content')


    <link rel="stylesheet" type="text/css" href="/css/bootstrap-social.css">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 company_register">
            <div class="panel panel-default">
                <div class="panel-heading">アカウントを新規登録</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('company.register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 control-label">企業名<span class="form_req">必須</span></label>

                            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                
                        

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 control-label">メールアドレス<span class="form_req">必須</span></label>

                            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-offset-1 col-md-5 col-sm-5 col-sm-offset-1">
                                <label for="password" class="control-label">パスワード<span class="form_req">必須</span></label>
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-5 col-sm-5 passcomf_box">
                                <label for="password-confirm" class="control-label">パスワード(確認)</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3 submit">
                                <button type="submit" class="btn btn-primary">
                                    アカウントを作成する
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
