@extends('layouts.defalut')

@section('title', '送金申請')

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
            <h1 class="panel-title">送金申請</h1>
        </div>
        <div class="panel-body">
            <form action="{{action('TransferController@confirm')}}" method="post">
            {{--<input type="hidden" name="confirming" value="{{ old('confirming', 'false') }}">--}}
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
                <div class="form-group required {{ $errors->has('money') ? 'has-error' : '' }}">
                    <label class="control-label" for="money">送金金額</label>
                    @if(old('confirming', 'false') === 'false')
                        <input type="text" class="form-control" name="money" value="{{ old('money') }}">
                    @else
                        <p class="form-control-static">{{ old('money') }}</p>
                        <input type="hidden" name="money" value="{{ old('money') }}">
                    @endif
                    @if($errors->has('money'))
                        <p class="help-block">{{ $errors->first('money') }}</p>
                    @endif
                </div>
            <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">確認</button>
            </div>

            </form>
        </div>
    </div>

@endsection
