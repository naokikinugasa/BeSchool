@extends('layouts.defalut')

@section('title', 'お問い合わせ')

@section('content')
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="panel panel-default" style="width: 50%; margin: auto;">
        <div class="panel-heading">
            <h1 class="panel-title">お問い合わせ</h1>
        </div>
        <div class="panel-body">
            <form action="{{action('ContactController@confirm')}}" method="post">
            {{--<input type="hidden" name="confirming" value="{{ old('confirming', 'false') }}">--}}
            <div class="form-group required {{ $errors->has('name') ? 'has-error' : '' }}">
                <label class="control-label" for="name">お名前</label>
                @if(old('confirming', 'false') === 'false')
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                @else
                    <p class="form-control-static">{{ old('name') }}</p>
                    <input type="hidden" name="name" value="{{ old('name') }}">
                @endif
                @if($errors->has('name'))
                    <p class="help-block">{{ $errors->first('name') }}</p>
                @endif
            </div>
            <div class="form-group required {{ $errors->has('email') ? 'has-error' : '' }}">
                <label class="control-label" for="email">メールアドレス</label>
                @if(old('confirming', 'false') === 'false')
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                @else
                    <p class="form-control-static">{{ old('email') }}</p>
                    <input type="hidden" name="email" value="{{ old('email') }}">
                @endif
                @if($errors->has('email'))
                    <p class="help-block">{{ $errors->first('email') }}</p>
                @endif
            </div>
            <div class="form-group required {{ $errors->has('content') ? 'has-error' : '' }}">
                <label class="control-label" for="content">内容</label>
                @if(old('confirming', 'false') === 'false')
                    <textarea type="text" class="form-control" name="content" rows="10">{{
                            old('content')
                        }}</textarea>
                @else
                    <p class="form-control-static">{!! nl2br(e(old('content'))) !!}</p>
                    <input type="hidden" name="content" value="{{ old('content') }}">
                @endif
                @if($errors->has('content'))
                    <p class="help-block">{{ $errors->first('content') }}</p>
                @endif
            </div>
            <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">確認</button>
            </div>

            </form>
        </div>
    </div>

    {{--@if ($errors->any())--}}
        {{--<ul>--}}
            {{--@foreach ($errors->all() as $error)--}}
                {{--<li>{{ $error }}</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
    {{--@endif--}}

    {{--<form action="{{action('ContactController@confirm')}}" method="post">--}}


        {{--<input type="text" name="name" value="{{old('name')}}">--}}

        {{--<input type="text" name="email" value="{{old('email')}}">--}}

        {{--<textarea name="message">{{old('message')}}</textarea>--}}

        {{--<input type="submit" value="Confirm">--}}
    {{--</form>--}}
@endsection
