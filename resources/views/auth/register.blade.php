@extends('layouts.app')

@section('content')


    <link rel="stylesheet" type="text/css" href="/css/bootstrap-social.css">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 register">
            <div class="panel panel-default">
                <div class="register_title">
                    <p>アカウントを新規登録</p>
                </div>
                <div class="panel-heading">
                    <div class="col-md-offset-1 to_company_box">
                        <a href="{{ route('company.register') }}"><p class="to_company">企業様はこちらから</p></a>
                    </div>
                </div>

                <div class="panel-body register_form">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} register_name">
                            <label for="name" class="col-md-10 col-md-offset-1 control-label">名前<span class="form_req">必須</span></label>

                            <div class="col-md-10 col-md-offset-1">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }} register_sex">
                            <label for="sex" class="col-md-10 col-md-offset-1 control-label">性別<span class="form_req">必須</span></label>

                            <div class="col-md-10 col-md-offset-1">
                                <input type="radio" name="sex" value="男" /><p>男</p>
                                <input type="radio" name="sex" value="女" /><p>女</p>
                                <input type="radio" name="sex" value="その他" /><p>その他</p>
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('birth') || $errors->has('birth_year') || $errors->has('birth_month') || $errors->has('birth_day') ? ' has-error' : '' }}">
                            <label for="birth_year" class="col-md-10 col-md-offset-1 control-label">生年月日<span class="form_req">必須</span></label>

                            <div class="col-md-10 col-md-offset-1">
                                <div class="year_box">
                                    <div class="select_year">
                                        <select id="birth_year" class="form-control" name="birth_year">
                                        <option value=""></option>
                                        @for ($i = 1950; $i <= 2018; $i++)
                                        <option value="{{ $i }}"@if(old('birth_year') == $i) selected @endif>{{ $i }}</option>
                                        @endfor
                                        </select>

                                        @if ($errors->has('birth_year'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('birth_year') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="text_year">年</div>
                                </div>

                                <div class="month_box">
                                    <div class="select_month">
                                        <select id="birth_month" class="form-control" name="birth_month">
                                        <option value=""></option>
                                        @for ($i = 1; $i <= 12; $i++)
                                        <option value="{{ $i }}"@if(old('birth_month') == $i) selected @endif>{{ $i }}</option>
                                        @endfor
                                        </select>

                                        @if ($errors->has('birth_month'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('birth_month') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="text_month">月</div>
                                </div>

                                <div class="day_box">
                                    <div class="select_day">
                                        <select id="birth_day" class="form-control" name="birth_day">
                                        <option value=""></option>
                                        @for ($i = 1; $i <= 31; $i++)
                                        <option value="{{ $i }}"@if(old('birth_day') == $i) selected @endif>{{ $i }}</option>
                                        @endfor
                                        </select>

                                        @if ($errors->has('birth_day'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('birth_day') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="text_day">日</div>
                                </div>
                            </div>

                            <div class="col-md-10 col-md-offset-4">
                            @if ($errors->has('birth'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('birth') }}</strong>
                                </span>
                            @endif
                            </div>

                        </div>
            

                        <div class="form-group{{ $errors->has('birthplace') ? ' has-error' : '' }}">
                            <label for="birthplace" class="col-md-10 col-md-offset-1 control-label">出身地<span class="form_req">必須</span></label>

                            <div class="col-md-offset-1 select_birthplace">
                                <select name="birthplace" class="form-control">
                                    @foreach(config('prefecture') as $index => $name)
                                        <option value="{{ $index }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('residence') ? ' has-error' : '' }}">
                            <label for="residence" class="col-md-10 col-md-offset-1 control-label">居住地<span class="form_req">必須</span></label>

                            <div class="col-md-offset-1 select_residence">
                                <select name="residence" class="form-control">
                                    @foreach(config('prefecture') as $index => $name)
                                        <option value="{{ $index }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('academicbackground') ? ' has-error' : '' }}">
                            <label for="academicbackground" class="col-md-10 col-md-offset-1 control-label">学歴</label>

                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" type="text" class="form-control" name="academicbackground" value="{{ old('academicbackground') }}" required>

                                @if ($errors->has('academicbackground'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('academicbackground') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('affiliation') ? ' has-error' : '' }}">
                            <label for="affiliation" class="col-md-10 col-md-offset-1 control-label">所属</label>

                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" type="text" class="form-control" name="affiliation" value="{{ old('affiliation') }}" required placeholder='(例)○○大学○○学部○○学科○年'>

                                @if ($errors->has('affiliation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('affiliation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('affiliation') ? ' has-error' : '' }}">
                            <label for="catchphrase" class="col-md-10 col-md-offset-1 control-label">キャッチコピー</label>

                            <div class="col-md-offset-1 input_catchphrase">
                                <input id="email" type="text" class="form-control" name="catchphrase" value="{{ old('catchphrase') }}" required maxlength='10'>

                                @if ($errors->has('catchphrase'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('catchphrase') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-10 col-md-offset-1 control-label">メールアドレス<span class="form_req">必須</span></label>

                            <div class="col-md-offset-1 input_email">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="pass_box col-md-offset-1 col-md-5 col-sm-6">
                                <label for="password" class="control-label">パスワード<span class="form_req">必須</span></label>
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="pass_box passcomf_box col-md-5 col-sm-6">
                                <label for="password-confirm" class="control-label">パスワード (確認)</label>
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
