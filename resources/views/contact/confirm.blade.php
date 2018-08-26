@extends('layouts.defalut')

@section('title', 'お問い合わせ')

@section('content')
    <div class="panel panel-default" style="width: 50%; margin: auto;">
        <div class="panel-heading">
            <h1 class="panel-title">内容確認</h1>
        </div>
        <div class="panel-body">
            <form action="{{action('ContactController@process')}}" method="post">

            <div class="form-group">
                <label class="control-label" for="name">お名前</label>
                <p class="form-control-static">{{$contact->name}}</p>
            </div>
            <div class="form-group">
                <label class="control-label" for="email">メールアドレス</label>
                <p class="form-control-static">{{$contact->email}}</p>
            </div>
            <div class="form-group">
                <label class="control-label" for="content">内容</label>
                <p class="form-control-static">{{$contact->content}}</p>
            </div>

            @foreach($contact->getAttributes() as $key => $value)
                <input type="hidden" name="{{$key}}" value="{{$value}}">
            @endforeach

            <div class="form-group text-center">
                @if(old('confirming', 'false') === 'false')
                    <button type="submit" class="btn btn-primary">送信</button>
                @else
                    <button type="submit" name="action" value="post" class="btn btn-primary">送信</button>
                    <button type="submit" name="action" value="back" class="btn btn-default">戻る</button>
                @endif
            </div>
            </form>
        </div>
    </div>
@endsection