@extends('layouts.defalut')

@section('title', '投稿画面')

@section('content')
        <!-- Page Content-->
        <div class="container padding-bottom-3x mb-1">
            <div class="row">
                <div class="col-lg-4">
                    <aside class="user-info-wrapper">
                        <div id="preview"></div>
                    </aside>
                </div>
                <div class="col-lg-8">

                    <form method="post" action="{{ url('/products/create/confirm') }}" enctype="multipart/form-data">


                    <div class="padding-top-2x mt-2 hidden-lg-up"></div>


                    <h6 class="text-muted text-normal text-uppercase margin-top-2x">動画情報</h6>
                    <hr class="margin-bottom-1x">
                    <div class="form-group row">
                        <label class="col-2 col-form-label" for="text-input">タイトル</label>
                        <div class="col-10">
                            <input class="form-control" type="text" id="text-input" name="title" placeholder="(必須)　例：○○">
                        </div>
                        @if($errors->has('title'))
                            <p style="color: red;">EROOR {{$errors->first('title')}}</p>
                        @endif
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label" for="textarea-input">説明</label>
                        <div class="col-10">
                            <textarea class="form-control" id="textarea-input" name="description" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label" for="select-input">カテゴリー</label>
                        <div class="col-10">
                            <input type="radio" name="category_id" value="1">{{Helper::getCategoryName(1)}}
                            <input type="radio" name="category_id" value="2">{{Helper::getCategoryName(2)}}

                            @if($errors->has('category_id'))
                                <p style="color: red;">EROOR {{$errors->first('category_id')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label" for="file-input">動画</label>
                        <div class="col-10">
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
                        <label class="col-2 col-form-label" for="text-input">URL</label>
                        <div class="col-10">
                            <input class="form-control" type="text" id="text-input" name="url">
                        </div>
                            @if($errors->has('url'))
                                <p style="color: red;">EROOR {{$errors->first('url')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        
                        <div class="col-12">
                            <div class="d-flex flex-wrap justify-content-between align-items-center">
                                <input class="btn btn-primary margin-right-none" type="submit" value="投稿する" style="height: 40px;">
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
@endsection