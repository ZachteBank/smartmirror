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
        <span id="timeAnaloge2" class="hidden"><canvas id="analogCanvas" width="400" height="400"></canvas></span>
    </div>
</div>


@push("afterScripts")
    <script id="analogScript2" data-timestamp="{{strtotime("now")}}" defer src="{{asset('smartmirror','widgets/js/analogClock.js')}}"></script>

    <script>
        var $analoge2 = $("#timeAnaloge2");
        $analoge2.hide();
        $analoge2.removeClass("hidden");
        $analoge2.fadeIn(3000);
    </script>
@endpush
