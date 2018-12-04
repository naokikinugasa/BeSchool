@extends('layouts.user')
@section('title', 'マイページ')
@section('user_content')
        <!-- Page Content-->
    <div class="container padding-bottom-3x mb-1">
            <!-- Poduct Gallery-->
            <div class="col-md-6">
                <div class="product-gallery">
                    <div class="product-carousel owl-carousel">
                        <div data-hash="one" style="height: 100%;"><video src="{{$product->pic_thum()}}" controls></video></div>
                    </div>
                </div>
            </div>
            <!-- Product Info-->
            <form action="/products/edit/{{ $product->id }}" method="post">
            {{ csrf_field() }}

            <!-- <div class="col-md-6"> -->
                <div class="padding-top-2x mt-2 hidden-md-up"></div>
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label for="title" class="col-md-4 control-label">名前</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="title" value="{{$product->title}}" required autofocus>

                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="url" class="col-md-4 control-label">URL</label>

                    <div class="col-md-6">
                        <input id="email" type="text" class="form-control" name="url" value="{{ $product->url }}" required>

                        @if ($errors->has('url'))
                            <span class="help-block">
                                <strong>{{ $errors->first('url') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    <label for="description" class="col-md-4 control-label">説明</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="description" value="{{$product->description}}" required autofocus>

                        @if ($errors->has('description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                    <label for="sex" class="col-md-4 control-label">カテゴリー</label>

                    <div class="col-md-6">
                        <input type="radio" name="sex" value=1 /> マインド　
                        <input type="radio" name="sex" value=2 /> スキル
                    </div>
                </div>
                <!-- TODO:スキルも編集可能に -->

                <input type="hidden" name="user_id" value="{{ $product->user_id }}">

                <div class="padding-bottom-1x mb-2"><span class="text-medium">{{Helper::getCategoryName($product->category_id)}}</span></div>

                <button class="btn btn-owner" style="margin-right: 0px; padding: 0px 0px;">
                    <div class="owner-ava">
                        <a href="/">
                            {{--TODO:userページにリンク--}}
                            @if($product->getOwnerAvatar() !== null)
                            <img src="{{$product->getOwnerAvatar()}}" style="display: block;
    width: 44px;
    padding: 3px;
    border: 1px solid #e1e7ec;
border-radius: 50%;">
                            @else
                                <img src="/img/user_default.png" style="display: block;
    width: 44px;
    padding: 3px;
    border: 1px solid #e1e7ec;
border-radius: 50%;">
                            @endif
                        </a>
                    </div>
                </button>
                <span>{{$product->getOwnerName()}}</span>

                

                </div>
            <!-- </div> -->
            <div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            更新
        </button>
    </div>
</div>
</form>

    <form action="/products/delete/{{ $product->id }}" method='post'>
        {{ csrf_field() }}
            <input type='hidden' name='id' value='{{ $product->id }}'>
            <input type='submit' value='削除'>
    </form>

    </div>
    </div>

@endsection