<?php
/**
 * Created by PhpStorm.
 * User: bramk
 * Date: 15-3-2018
 * Time: 11:37
 */
?>

@extends('%gentelella.default')

@section('title', 'Home')

@section('bottomHead')

    <link href="{{asset('smartmirror','css/mirror.css')}}" rel="stylesheet">
@endsection

@push("afterScripts")
    <script defer src="{{asset('smartmirror','js/mirror.js')}}"></script>

@endpush

@section('body')
    <div class="row">
        <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
            @component("%smartmirror.widgets.weather", ["location"=>"eindhoven"])@endcomponent
        </div>

        <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6 float-right">
            @component("%smartmirror.widgets.analogClock2")@endcomponent
        </div>
    </div>

        <div class="col-md-6 col-lg-4 col-sm-6 col-xs-6 left-bottom">
            @component("%smartmirror.widgets.digitalClock")@endcomponent
        </div>

        <div class="col-md-6 col-lg-4 col-sm-6 col-xs-6 right-bottom">
            @component("%smartmirror.widgets.analogClock")@endcomponent
        </div>
@endsection
