@extends('layouts.user')
@section('title', 'マイページ')
@section('user_content')
<div class="col-lg-8 edit">
    <div class="padding-top-2x mt-2 hidden-lg-up"></div>
    <div class="prof_head_box">
        <p>名前：{{$user->name}}</p>
        @if(array_key_exists('avatar', $user))
        <div class="user-avatar"><a class="edit-avatar" href="#"></a>
            @if(isset($user->avatar))
            <img src="{{$user->avatar}}" alt="User">
            @else
            <img src="/img/user_default.png" alt="User">
            @endif
        </div>
        @endif
    </div>
    <form action="{{ action('UsersController@update') }}" method="post" class="edit_user">
    {{ csrf_field() }}

        <div class="form-group">
            <label for="avatar" class="col-md-10 col-md-offset-1 control-label">写真</label>
            <input type="file" name="avatar" class="col-md-10 col-md-offset-1">
        </div>

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

        <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
            <label for="sex" class="col-md-10 col-md-offset-1 control-label">性別</label>

            <div class="col-md-10 col-md-offset-1">
                <input type="radio" name="sex" value="男" {{ $user->sex == '男' ? 'checked': null }} /> 男　
                <input type="radio" name="sex" value="女" {{ $user->sex == '女' ? 'checked': null }} /> 女　
                <input type="radio" name="sex" value="その他" {{ $user->sex == 'その他' ? 'checked': null }} /> その他
            </div>
        </div>



        <div class="form-group{{ $errors->has('birth') || $errors->has('birth_year') || $errors->has('birth_month') || $errors->has('birth_day') ? ' has-error' : '' }}">
            <label for="birth_year" class="col-md-10 col-md-offset-1 control-label">生年月日</label>

            <div class="row col-md-10 col-md-offset-1">
                <div class="select_year">
                    <select id="birth_year" class="form-control" name="birth_year">
                    <option value="">----</option>
                    <option selected value="{{ $user->birth_year }}">{{ $user->birth_year }}</option>
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

                <div class="select_month">
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
                <div class="text_month">月</div>

                <div class="select_day">
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
                <div class="text_day">日</div>
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
            <label for="birthplace" class="col-md-10 col-md-offset-1 control-label">出身地</label>

            <div class="col-md-10 col-md-offset-1">
                <select name="birthplace">
                    <option selected value="{{ $user->birthplace }}">{{ config('prefecture')[$user->birthplace] }}</option>
                    @foreach(config('prefecture') as $index => $name)
                        <option value="{{ $index }}">{{ $name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group{{ $errors->has('residence') ? ' has-error' : '' }}">
            <label for="residence" class="col-md-10 col-md-offset-1 control-label">居住地</label>

            <div class="col-md-10 col-md-offset-1">
                <select name="residence">
                    <option selected value="{{ $user->residence }}">{{ config('prefecture')[$user->residence] }}</option>
                    @foreach(config('prefecture') as $index => $name)
                        <option value="{{ $index }}">{{ $name }}</option>
                    @endforeach
                </select>
            </div>
        </div>


        <div class="form-group{{ $errors->has('academicbackground') ? ' has-error' : '' }}">
            <label for="academicbackground" class="col-md-10 col-md-offset-1 control-label">学歴</label>

            <div class="col-md-10 col-md-offset-1">
                <input id="email" type="text" class="form-control" name="academicbackground" value="{{ $user->academicbackground }}" required>

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
                <input id="email" type="text" class="form-control" name="affiliation" value="{{ $user->affiliation }}" required placeholder='(例)○○大学○○学部○○学科○年'>

                @if ($errors->has('affiliation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('affiliation') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('affiliation') ? ' has-error' : '' }}">
            <label for="catchphrase" class="col-md-10 col-md-offset-1 control-label">キャッチコピー</label>

            <div class="col-md-10 col-md-offset-1">
                <input id="email" type="text" class="form-control" name="catchphrase" value="{{ $user->catchphrase }}" required maxlength='10'>

                @if ($errors->has('catchphrase'))
                    <span class="help-block">
                        <strong>{{ $errors->first('catchphrase') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        

        <div class="form-group{{ $errors->has('skill') ? ' has-error' : '' }}">
            <label for="skill" class="col-md-10 col-md-offset-1 control-label">スキル</label>

            <div class="col-md-10 col-md-offset-1">
                <input type="radio" name="skill" value="セールス" /> セールス　
                <input type="radio" name="skill" value="マーケティング" /> マーケティング
                <input type="radio" name="skill" value="プログラミング" /> プログラミング
                <input type="radio" name="skill" value="デザイン" /> デザイン
            </div>
        </div>


        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-10 col-md-offset-1 control-label">メールアドレス *非公開</label>

            <div class="col-md-10 col-md-offset-1">
                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('painful') ? ' has-error' : '' }}">
            <label for="painful" class="col-md-10 col-md-offset-1 control-label">人生で一番つらかったこと</label>

            <div class="col-md-10 col-md-offset-1">
                <input id="email" type="text" class="form-control" name="painful" value="{{ $user->painful }}" maxlength='200'>

                @if ($errors->has('painful'))
                    <span class="help-block">
                        <strong>{{ $errors->first('painful') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('worked') ? ' has-error' : '' }}">
            <label for="worked" class="col-md-10 col-md-offset-1 control-label">人生でやりきったこと</label>

            <div class="col-md-10 col-md-offset-1">
                <!-- <input id="email" type="text" class="form-control" name="worked" value="{{ $user->worked }}" maxlength='200'> -->
                <textarea id="email" class="form-control" name="worked" ></textarea>

                @if ($errors->has('worked'))
                    <span class="help-block">
                        <strong>{{ $errors->first('worked') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('vision') ? ' has-error' : '' }}">
            <label for="vision" class="col-md-10 col-md-offset-1 control-label">将来のビジョン</label>

            <div class="col-md-10 col-md-offset-1">
                <input id="email" type="text" class="form-control" name="vision" value="{{ $user->vision }}" maxlength='200'>

                @if ($errors->has('vision'))
                    <span class="help-block">
                        <strong>{{ $errors->first('vision') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-10 col-md-offset-1 col-form-label" for="file-input">動画</label>
            <div class="col-md-10 col-md-offset-1">
                <div class="custom-file">
                    <input class="custom-file-input" type="file" id="file-input" name="thum">
                </div>
            </div>
            @if($errors->has('thum'))
                <p style="color: red;">EROOR {{$errors->first('thum')}}</p>
            @endif
        </div>

        <div class="form-group{{ $errors->has('finding') ? ' has-error' : '' }}">
            <label for="finding" class="col-md-10 col-md-offset-1 control-label">就職の意思</label>

            <div class="col-md-10 col-md-offset-1">
                <input type="radio" name="finding" value=1 /> 有　
                <input type="radio" name="finding" value=2 /> 無
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