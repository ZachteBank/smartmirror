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
    <script defer src="{{asset('smartmirror','js/clock.js')}}"></script>
    <script defer src="{{asset('smartmirror','js/mirror.js')}}"></script>

@endpush

@section('body')
    <div class="row">
        <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
            <div class="x_panel bg-black white-text">
                <div id="weather" class="x_content text-center">
                    <span id="weatherCurrent">13&deg;</span>
                    <div class="ln_solid"></div>
                    <span id="weatherIcon"><i class="fa fa-cloud"></i></span>
                    <div class="ln_solid"></div>
                    <span id="weatherCurrent">10&deg;</span>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6 float-right">
            <div class="x_panel bg-black white-text">
                <div id="weather" class="x_content text-center">

                </div>
            </div>
        </div>
    </div>

        <div class="col-md-6 col-lg-4 col-sm-6 col-xs-6 left-bottom">
            <div class="x_panel bg-black white-text">
                <div class="time x_content text-center">
                    <span id="timeDigital">15:49</span>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4 col-sm-6 col-xs-6 right-bottom">
            <div class="x_panel bg-black white-text">
                <div class="time x_content text-center">
                    <span id="timeAnaloge"><canvas id="canvas" width="400" height="400"></canvas></span>
                </div>
            </div>
        </div>
@endsection
