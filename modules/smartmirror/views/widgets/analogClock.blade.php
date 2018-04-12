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
        <span id="timeAnaloge"><canvas id="canvas" width="400" height="400"></canvas></span>
    </div>
</div>


@push("afterScripts")
    <script id="analogScript" data-timestamp="{{strtotime("now")}}" defer src="{{asset('smartmirror','js/clock.js')}}"></script>

@endpush
