@extends('layouts.defalut')

@section('title', '出品画面')

@section('content')
        <!-- Page Content-->
        <div class="container padding-bottom-3x mb-1">
            <div class="row">
                <div class="col-lg-4">
                    <aside class="user-info-wrapper">

                        <div id="preview"></div>

                        {{--<div class="user-cover" style="background-image: url(img/account/user-cover-img.jpg);">--}}
                            {{--<div class="info-label" data-toggle="tooltip" title="You currently have 290 Reward Points to spend"><i class="icon-medal"></i>290 points</div>--}}
                        {{--</div>--}}
                        {{--<div class="user-info">--}}
                            {{--<div class="user-avatar"><a class="edit-avatar" href="#"></a><img src="img/account/user-ava.jpg" alt="User"></div>--}}
                            {{--<div class="user-data">--}}
                                {{--<h4>Daniel Adams</h4><span>Joined February 06, 2017</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </aside>
                    {{--<nav class="list-group"><a class="list-group-item with-badge" href="account-orders.html"><i class="icon-bag"></i>Orders<span class="badge badge-primary badge-pill">6</span></a><a class="list-group-item" href="account-profile.html"><i class="icon-head"></i>Profile</a><a class="list-group-item active" href="account-address.html"><i class="icon-map"></i>Addresses</a><a class="list-group-item with-badge" href="account-wishlist.html"><i class="icon-heart"></i>Wishlist<span class="badge badge-primary badge-pill">3</span></a><a class="list-group-item with-badge" href="account-tickets.html"><i class="icon-tag"></i>My Tickets<span class="badge badge-primary badge-pill">4</span></a></nav>--}}
                </div>
                <div class="col-lg-8">

                    <form method="post" action="{{ url('/products/create/confirm') }}" enctype="multipart/form-data">


                    <div class="padding-top-2x mt-2 hidden-lg-up"></div>


                    <h6 class="text-muted text-normal text-uppercase margin-top-2x">商品情報</h6>
                    <hr class="margin-bottom-1x">
                    <div class="form-group row">
                        <label class="col-2 col-form-label" for="text-input">商品名</label>
                        <div class="col-10">
                            <input class="form-control" type="text" id="text-input" name="title" placeholder="(必須)　例：プロジェクター">
                        </div>
                        @if($errors->has('title'))
                            <p style="color: red;">EROOR {{$errors->first('title')}}</p>
                        @endif
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label" for="textarea-input">商品説明</label>
                        <div class="col-10">
                            <textarea class="form-control" id="textarea-input" name="honbun" rows="5" placeholder="(任意)&#13;&#10;例：2年ほど前に1万円で購入したプロジェクターです。箱に入れた上に、袋に入れているので、持って行きやすいと思います。Amazonリンクはこちら。http://www.amazon.co.jp/dp/4844336479"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label" for="select-input">かテゴリー</label>
                        <div class="col-10">
                            <select class="form-control" id="select-input" name="category_id">
                                <option value="0" style="display: none;">カテゴリーを選択</option>
                                <option value="1">{{Helper::getCategoryName(1)}}</option>
                                <option value="2">{{Helper::getCategoryName(2)}}</option>
                                <option value="3">{{Helper::getCategoryName(3)}}</option>
                                <option value="4">{{Helper::getCategoryName(4)}}</option>
                                <option value="5">{{Helper::getCategoryName(5)}}</option>
                                <option value="6">{{Helper::getCategoryName(6)}}</option>
                            </select>
                            @if($errors->has('category_id'))
                                <p style="color: red;">EROOR {{$errors->first('category_id')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label" for="file-input">画像</label>
                        <div class="col-10">
                            <div class="custom-file">
                                <input class="custom-file-input" type="file" id="file-input" name="thum">
                                <label class="custom-file-label" for="file-input">画像を選択</label>
                                {{--<input id="file" type="file" name="thum" style="display: none" />--}}

                                {{--<input class="custom-file-label" id="text" type="text" value="選択されていません" />--}}
                                {{--<input id="button" type="button" value="ファイルを開く" />--}}
                                {{--<input class="custom-file-input" id="file-input" type="file" name="thum" style="display: none" />--}}
                            </div>
                        </div>
                        <p style="color: red">※画像は横長でお願いします。</p>
                        @if($errors->has('thum'))
                            <p style="color: red;">EROOR {{$errors->first('thum')}}</p>
                        @endif
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label" for="select-input">場所</label>
                        <div class="col-10">
                            <select class="form-control" id="select-input" name="place">
                                <option value="0" style="display: none;">場所を選択</option>
                                <option>ユースペース(天２)</option>
                            </select>
                            @if($errors->has('place'))
                                <p style="color: red;">EROOR {{$errors->first('place')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-form-label" for="text-input">レンタル料</label>
                        <div class="col-sm-3 col-xl-3">
                            <input class="form-control" type="text" id="text-input" name="price_day" placeholder="(必須)　¥ 日">
                        </div>
                        <div class="col-sm-3 col-xl-3">
                            <input class="form-control" type="text" id="text-input" name="price_week" placeholder="(任意)　¥ 週">
                        </div>
                        <div class="col-sm-3 col-xl-3">
                            <input class="form-control" type="text" id="text-input" name="price_month" placeholder="(任意)　¥ 月">
                        </div>
                        @if($errors->has('price_day'))
                            <p style="color: red;">EROOR {{$errors->first('price_day')}}</p>
                        @endif
                        <div class="col-12">
                            <div class="d-flex flex-wrap justify-content-between align-items-center">
                                <div class="custom-control custom-checkbox d-block">
                                    {{--<input class="custom-control-input" type="checkbox" id="subscribe_me" checked>--}}
                                    {{--<label class="custom-control-label" for="subscribe_me">Subscribe me to Newsletter</label>--}}
                                </div>
                                <input class="btn btn-primary margin-right-none" type="submit" value="出品する" style="height: 40px;">
                            </div>
                        </div>
                    </div>
                    </form>
                    <p>*出品上の注意</p>
                    <!--        TODO:お問い合わせリンクに下線つける-->
                    <p>ゲームソフト・漫画・DVD等は著作権に違反するため出品できません。これは出品しても大丈夫なのだろうかと疑問に思うものがあれば、<a href="contact.php">お問い合わせ</a>ページよりお気軽にご質問ください。</p><br>


                </div>
            </div>
        </div>









<script>
$j('#file-input').change(function() {
  var fr = new FileReader();
  fr.onload = function() {
    var img = $j('<img>').attr('src', fr.result).attr('style', 'width: 100%;');
    $j('#preview').append(img);
  };
  fr.readAsDataURL(this.files[0]);
});
</script>
        {{--<input id="text" type="text" value="選択されていません" />--}}
        {{--<input id="button" type="button" value="ファイルを開く" />--}}
        {{--<input id="file" type="file" name="thum" style="display: none" />--}}
{{--<script type="text/javascript">--}}
    {{--console.log('Start');--}}
    {{--var file = document.getElementById( 'file' );--}}
    {{--var text = document.getElementById( 'file-input' );--}}
    {{--console.log('file');--}}
    {{--console.log(file);--}}
    {{--console.log('text');--}}
    {{--console.log(text);--}}
    {{--// var button = document.getElementById( 'button' );--}}

    {{--file.onchange = function()--}}
    {{--{--}}
        {{--console.log('onchange');--}}
        {{--text.value = this.value;--}}
    {{--}--}}

    {{--text.onclick = function()--}}
    {{--{--}}
        {{--console.log('click');--}}
        {{--// type="file"要素のclickイベントを発生させる--}}
        {{--file.click();--}}
    {{--}--}}
{{--</script>--}}
@endsection