@extends('layouts.app_company')

@section('content')
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-social.css">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ログイン</div>
                <div class="panel-body panel-body-login">
                        <h4 style="text-align: center;">アカウントをお持ちでない方はこちら</h4>
                        <a href="/register" class="btn btn-primary" style="width: 100%">新規会員登録</a>
                        <hr>
                    <h4 style="text-align: center;">メールアドレスでログイン</h4>
                    <form class="form-horizontal" method="POST" action="{{ route('company.login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            {{--<label for="emails" class="col-md-4 control-label">E-Mail Address</label>--}}

                            <div>
                                <input id="email" type="email" class="form-control" name="email" placeholder="メールアドレス" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                            <div>
                                <input id="password" type="password" class="form-control" name="password" placeholder="パスワード" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    ログイン
                                </button>

                                {{--<a class="btn btn-link" href="{{ route('company.password.request') }}">--}}
                                    {{--Forgot Your Password?--}}
                                {{--</a>--}}
                            </div>
                        </div>

                    </form>

                    <!-- <h4 style="text-align: center;">学生の方は<a href="{{ route('login') }}">こちら</a></h4> -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
