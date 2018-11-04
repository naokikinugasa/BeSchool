@extends('layouts.defalut')

@section('title', '投稿画面')

@section('content')
        <!-- Page Content-->
        <div class="container padding-bottom-3x mb-1 post_movie">
            <div class="row">
                <div class="col-lg-4">
                    <aside class="user-info-wrapper">
                        <div id="preview"></div>
                    </aside>
                </div>

                <h4 class="post_movie_title">動画をアップロード</h4>

                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">

                    <form method="post" action="{{ url('/products/create/confirm') }}" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-form-label" for="text-input">タイトル</label>
                            <div class="input_title">
                                <input class="form-control" type="text" id="text-input" name="title" placeholder="(必須)　例：○○">
                            </div>
                            @if($errors->has('title'))
                                <p style="color: red;">EROOR {{$errors->first('title')}}</p>
                            @endif
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label" for="textarea-input">説明</label>
                            <div class="textarea_description">
                                <textarea class="form-control" id="textarea-input" name="description" rows="10" cols="40"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label" for="text-input">URL</label>
                            <div class="input_url">
                                <input class="form-control" type="text" id="text-input" name="url">
                            </div>
                                @if($errors->has('url'))
                                    <p style="color: red;">EROOR {{$errors->first('url')}}</p>
                                @endif
                        </div>
                        <div class="form-group row">
                            <label style="display: block;">動画</label>
                            <label class="file_label col-form-label" for="file-input">ファイルを選択</label>
                            <div class="hidden">
                                <div class="custom-file">
                                    <input class="custom-file-input" type="file" id="file-input" name="thum">
                                    <label class="custom-file-label" for="file-input">動画を選択</label>
                                </div>
                            </div>
                            @if($errors->has('thum'))
                                <p style="color: red;">EROOR {{$errors->first('thum')}}</p>
                            @endif
                        </div>
                        <div class="form-group row">
                            <label class="col-2 col-form-label" for="select-input">カテゴリー</label>
                            <div class="input_category">
                                <input type="radio" name="category_id" value="1"><p>{{Helper::getCategoryName(1)}}</p>
                                <input type="radio" name="category_id" value="2"><p>{{Helper::getCategoryName(2)}}</p>

                                @if($errors->has('category_id'))
                                    <p style="color: red;">EROOR {{$errors->first('category_id')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="input_submit">
                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    <input class="btn btn-primary margin-right-none" type="submit" value="アップロード" style="height: 40px;">
                                </div>
                            </div>
                        </div>
                    </form>

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