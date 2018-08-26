@extends('layouts.user')
@section('title', 'マイページ')
@section('user_content')
        <div class="col-lg-8">
            <div class="padding-top-2x mt-2 hidden-lg-up"></div>
            <p>名前：{{$user->name}}</p>
            <p>性別：{{$user->sex}}</p>
            <p>生年月日：{{$user->birthday}}</p>
            <p>出身地：{{$user->birthplace}}</p>
            <p>在住地：{{$user->residence}}</p>
            <p>学歴：{{$user->academicbackground}}</p>
            <p>所属：{{$user->affliation}}</p>
            <p>キャッチコピー：{{$user->catchphrase}}</p>
            <p>人生で一番つらかったこと：{{$user->painful}}</p>
            <p>人生で一番やりきったこと：{{$user->worked}}</p>
            <p>将来ビジョン：{{$user->vision}}</p>
            <p>就職の有無：{{$user->finding}}</p>
            <!-- <form class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-fn">ニックネーム(公開)</label>
                        <input class="form-control" type="text" id="account-fn" value="{{$user->name}}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-email">メールアドレス</label>
                        <input class="form-control" type="email" id="account-email" value="{{$user->email}}" disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-pass">New Password</label>
                        <input class="form-control" type="password" id="account-pass">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-confirm-pass">Confirm Password</label>
                        <input class="form-control" type="password" id="account-confirm-pass">
                    </div>
                </div>
                <div class="col-12">
                    <hr class="mt-2 mb-3">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <div class="custom-control custom-checkbox d-block">
                            {{--<input class="custom-control-input" type="checkbox" id="subscribe_me" checked>--}}
                            {{--<label class="custom-control-label" for="subscribe_me">Subscribe me to Newsletter</label>--}}
                        </div>
                        <button class="btn btn-primary margin-right-none" type="button" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="icon-circle-check" data-toast-title="Success!" data-toast-message="Your profile updated successfuly.">更新する</button>
                    </div>
                </div>
            </form> -->
        </div>
@endsection