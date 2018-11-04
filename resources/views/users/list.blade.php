

@extends('layouts.defalut')

@section('content')

    <!-- Page Content-->
    <div class="users_container">
        <div class="cat_box">
            <a href="{{ action('ProductsController@index') }}" class="cat_item cat_all">ALL</a>
            <a href="{{ action('ProductsController@category', 1) }}" class="cat_item cat_mind">MIND</a>
            <a href="{{ action('ProductsController@category', 2) }}" class="cat_item cat_skill">SKILL</a>
        </div>
        <div class="users_box">
            @foreach ($users as $user)
            <div class="users_item">
            	<a href="/users/{{ $user->id }}">
	                <div class="user_card">
	                	<div class="user_card_head"></div>
	                	<div style="width: 180px; height: 180px; margin: 15px auto; border: 1px solid #707070;">
		                    <img src="{{ asset('img/user_default.png') }}" style="width: 100%; height: 100%; object-fit: cover;">
		                </div>
	                    <h4 class="user_catchphrase">{{$user->catchphrase}}</h4>
	                    <h4 class="user_skill">{{$user->skill}}マーケティング</h4>
	                    <h3 class="user_academic">{{$user->affiliation}}</h3>
	                </div>
	            </a>
            </div>
            @endforeach
        </div>
        <div class="pagination_box">
            <div class="paginate">
                @if ( $users->previousPageUrl() )
                <a href="{{ $users->previousPageUrl() }}">&lt;&lt;</a>
                @else
                    <p>&lt;&lt;</p>
                @endif

                @if ( $users->nextPageUrl() )
                    <a href="{{ $users->nextPageUrl() }}">&gt;&gt;</a>
                @else
                    <p>&gt;&gt;</p>
                @endif
            </div>
        </div>
    </div>

</div>
@endsection