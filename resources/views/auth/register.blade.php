@extends('layouts.app')

@section('content')


    <link rel="stylesheet" type="text/css" href="/css/bootstrap-social.css">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">会員登録</div>

                <div class="panel-body">
                    <h4 style="text-align: center;">メールアドレスで登録</h4>
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">名前</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                            <label for="sex" class="col-md-4 control-label">性別</label>

                            <div class="col-md-6">
                                <input type="radio" name="sex" value="男" /> 男　
                                <input type="radio" name="sex" value="女" /> 女
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('birth') || $errors->has('birth_year') || $errors->has('birth_month') || $errors->has('birth_day') ? ' has-error' : '' }}">
                            <label for="birth_year" class="col-md-4 control-label">生年月日</label>

                            <div class="row">
                                <div class="col-md-2">
                                    <select id="birth_year" class="form-control" name="birth_year">
                                    <option value="">----</option>
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

                                <div class="col-md-2">
                                    <select id="birth_month" class="form-control" name="birth_month">
                                    <option value="">--</option>
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

                                <div class="col-md-2">
                                    <select id="birth_day" class="form-control" name="birth_day">
                                    <option value="">--</option>
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
                            </div>

                            <div class="row col-md-6 col-md-offset-4">
                            @if ($errors->has('birth'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('birth') }}</strong>
                                </span>
                            @endif
                            </div>

                        </div>
            

                        <div class="form-group{{ $errors->has('birthplace') ? ' has-error' : '' }}">
                            <label for="birthplace" class="col-md-4 control-label">出身地</label>

                            <div class="col-md-6">
                                <select name="birthplace">
                                    @foreach(config('prefecture') as $index => $name)
                                        <option value="{{ $index }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('residence') ? ' has-error' : '' }}">
                            <label for="residence" class="col-md-4 control-label">居住地</label>

                            <div class="col-md-6">
                                <select name="residence">
                                    @foreach(config('prefecture') as $index => $name)
                                        <option value="{{ $index }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('academicbackground') ? ' has-error' : '' }}">
                            <label for="academicbackground" class="col-md-4 control-label">学歴</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="academicbackground" value="{{ old('academicbackground') }}" required>

                                @if ($errors->has('academicbackground'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('academicbackground') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('affiliation') ? ' has-error' : '' }}">
                            <label for="affiliation" class="col-md-4 control-label">所属</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="affiliation" value="{{ old('affiliation') }}" required placeholder='(例)○○大学○○学部○○学科○年'>

                                @if ($errors->has('affiliation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('affiliation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('affiliation') ? ' has-error' : '' }}">
                            <label for="catchphrase" class="col-md-4 control-label">キャッチコピー</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="catchphrase" value="{{ old('catchphrase') }}" required maxlength='10'>

                                @if ($errors->has('catchphrase'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('catchphrase') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">メールアドレス *非公開</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">パスワード *非公開</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">パスワード (確認)</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    登録
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
