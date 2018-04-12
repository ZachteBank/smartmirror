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
        <span id="weatherIcon"><i class="fa fa-cloud"></i><i class="wi wi-wind"></i></span>
    </div>
</div>

@push("afterScripts")
    <?php
    asset("weatherIcons", "weatherIcons/font/weathericons-regular-webfont.eot");
    asset("weatherIcons", "weatherIcons/font/weathericons-regular-webfont.woff");
    asset("weatherIcons", "weatherIcons/font/weathericons-regular-webfont.woff2");
    asset("weatherIcons", "weatherIcons/font/weathericons-regular-webfont.ttf");
    ?>
    <link rel="stylesheet" href="{{asset("weatherIcons", "weatherIcons/css/weather-icons-wind.css")}}" />
    <link rel="stylesheet" href="{{asset("weatherIcons", "weatherIcons/css/weather-icons.css")}}" />


    <script>
        $(document).ready(function () {
           refreshWeather();
        });

        function refreshWeather() {
            $.getJSON('http://api.openweathermap.org/data/2.5/weather?q={{$location}}&appid=a08eb18e2263126de2d45502c41e224b&units=metric', function(data) {
                console.log(data);
                setWeather(data);
            });

            setInterval(refreshWeather, 60000);
        }

        function setWeather(data){
            setTemp(data.main.temp);
            setWeatherIcon(data.weather[0].id);
            setWeatherWind(data.wind.deg);

        }

        function setWeatherIcon(id) {
            var weatherIcons = {!! trim(preg_replace('/\s\s+/', ' ', file_get_contents(asset("weatherIcons", "json/weatherIcons.json")))) !!};

            var prefix = 'wi wi-';
            var code = id;
            var icon = weatherIcons[code].icon;

            // If we are not in the ranges mentioned above, add a day/night prefix.
            if (!(code > 699 && code < 800) && !(code > 899 && code < 1000)) {
                icon = 'day-' + icon;
            }

            // Finally tack on the prefix.
            icon = prefix + icon;
            $("#weatherIcon i:first").removeClass();
            $("#weatherIcon i:first").addClass(icon);
        }

        function setWeatherWind(degree) {
            $("#weatherIcon i:nth-child(2)").removeClass();
            $("#weatherIcon i:nth-child(2)").addClass("wi wi-wind towards-"+degree+"-deg");
        }

        function setTemp(temp) {
            temp =  Math.round( temp);
            $("#weatherCurrentTemp").html(temp);
        }
    </script>


@endpush