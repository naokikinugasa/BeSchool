@extends('layouts.defalut')
@section('content')
<!-- Page Content-->
<div class="container padding-bottom-3x mb-2">
    <div class="row">

        @yield('user_content')

    </div>
</div>

    <script>
        $j(document).ready(function() {
            if(location.pathname.split("/")[2]) {
                $j('a[href^="/users/' + location.pathname.split("/")[2] + '"]').addClass('active');
            } else {
                $j('a[href = "/users"]').addClass('active');
            }
        });
    </script>
@endsection