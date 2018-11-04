@extends('layouts.user')
@section('title', 'マイページ')
@section('user_content')
        <!-- Page Content-->
    <div class="container padding-bottom-3x mb-1 edit_pro">
            <!-- Poduct Gallery-->
            <div class="edit_show_movie">
                <div class="product-gallery">
                    <div class="product-carousel owl-carousel">
                        <div data-hash="one" style="height: 100%;"><video src="{{asset('/movie/product')}}/{{$product->id}}/thum.qt" controls controlslist="nodownload"></video></div>
                    </div>
                </div>
            </div>
            <button class="btn btn-owner" style="margin-right: 0px; padding: 0px 0px;">
                <div class="owner-ava">
                    <a href="/">
                        {{--TODO:userページにリンク--}}
                        @if(array_key_exists('getOwnerAvatar', $product))
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
                        @endif
                    </a>
                </div>
            </button>
            <span>{{$product->getOwnerName()}}</span>

            <!-- Product Info-->
            <form action="/products/edit/{{ $product->id }}" method="post">
            {{ csrf_field() }}

                <div class="padding-top-2x mt-2 hidden-md-up"></div>
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label for="title" class="col-md-10 col-md-offset-1 control-label">名前</label>

                    <div class="col-md-10 col-md-offset-1">
                        <input id="name" type="text" class="form-control" name="title" value="{{$product->title}}" required autofocus>

                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="url" class="col-md-10 col-md-offset-1 control-label">URL</label>

                    <div class="col-md-10 col-md-offset-1">
                        <input id="email" type="text" class="form-control" name="url" value="{{ $product->url }}" required>

                        @if ($errors->has('url'))
                            <span class="help-block">
                                <strong>{{ $errors->first('url') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    <label for="description" class="col-md-10 col-md-offset-1 control-label">説明</label>

                    <div class="col-md-10 col-md-offset-1">
                        <!-- <input id="name" type="text" class="form-control" name="description" value="{{$product->description}}" required autofocus> -->
                        <textarea class="form-control" id="textarea-input" name="description" rows="10" cols="40">{{$product->description}}</textarea>

                        @if ($errors->has('description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                    <label for="sex" class="col-md-10 col-md-offset-1 control-label">カテゴリー</label>

                    <div class="col-md-10 col-md-offset-1">
                        @if ($product->category_id == 1)
                            <input type="radio" name="sex" value=1 checked /> マインド　
                        @else
                            <input type="radio" name="sex" value=1 /> マインド　
                        @endif
                        @if ($product->category_id == 2)
                            <input type="radio" name="sex" value=2 checked /> スキル
                        @else
                            <input type="radio" name="sex" value=2 /> スキル
                        @endif
                    </div>
                </div>
                <!-- TODO:スキルも編集可能に -->

                <input type="hidden" name="user_id" value="{{ $product->user_id }}">

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-3 input_submit">
                        <button type="submit" class="btn btn-primary">
                            更新
                        </button>
                    </div>
                </div>
            </form>

    </div>

@endsection