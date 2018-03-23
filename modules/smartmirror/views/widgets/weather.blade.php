<?php
/**
 * Created by PhpStorm.
 * User: bramk
 * Date: 23-3-2018
 * Time: 13:40
 */
?>

<div class="x_panel bg-black white-text">
    <div id="weather" class="x_content text-center">
        <span id="weatherCurrent"><span id="weatherCurrentTemp">10</span>&deg;</span>
        <div class="ln_solid"></div>
        <span id="weatherIcon"><i class="fa fa-cloud"></i></span>
        <div class="ln_solid"></div>
        <span id="weatherCurrent">10&deg;</span>
    </div>
</div>

@push("afterScripts")

    <script>
        $.getJSON('http://api.openweathermap.org/data/2.5/weather?q={{$location}}&appid=a08eb18e2263126de2d45502c41e224b&units=metric', function(data) {
            console.log(data);
            setTemp(data.main.temp);
        });

        function setTemp(temp) {
            temp =  Math.round( temp);
            $("#weatherCurrentTemp").html(temp);
        }
    </script>


@endpush