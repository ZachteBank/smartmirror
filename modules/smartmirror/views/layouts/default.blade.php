@extends("%gentelella.skin")

@section("websiteName", "Smartmirror")

@section("SiteInfoAndUserInfo")
    <div class="navbar nav_title" style="border: 0;">
        <a href="{{route('home')}}" class="site_title"><i class="fa fa-sliders"></i> <span>Smartmirror.com</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
        <div class="profile_info">
            <span>{{__("Welkom")}},</span>

        </div>
        <div class="clearfix"></div>
    </div>
    <!-- /menu profile quick info -->

@endsection

@section("footerText")
    @yield('title') - Smartmirror.com
@endsection

@push("styles")
    <link rel="stylesheet" href="{{asset("smartmirror", "css/global.css")}}">
@endpush
