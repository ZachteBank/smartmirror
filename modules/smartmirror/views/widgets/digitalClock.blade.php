<?php
/**
 * Created by PhpStorm.
 * User: bramk
 * Date: 23-3-2018
 * Time: 13:42
 */
?>
<div class="x_panel bg-black white-text">
    <div class="time x_content text-center">
        <div id="dayDigital" class="hidden"></div>
        <div id="dateDigital" class="hidden"></div>
        <div id="timeDigital" class="hidden"></div>
    </div>
</div>

@push("afterScripts")

    <script id="digitalScript" data-timestamp="{{strtotime("now")}}" defer src="{{asset('smartmirror','widgets/js/digitalClock.js')}}"></script>

    <script>
        var $dayDigital = $("#dayDigital");
        $dayDigital.hide();
        $dayDigital.removeClass("hidden");
        $dayDigital.fadeIn(2000);

        var $dateDigital = $("#dateDigital");
        $dateDigital.hide();
        $dateDigital.removeClass("hidden");
        $dateDigital.fadeIn(2000);

        var $timeDigital = $("#timeDigital");
        $timeDigital.hide();
        $timeDigital.removeClass("hidden");
        $timeDigital.fadeIn(2000);
    </script>

    @endpush