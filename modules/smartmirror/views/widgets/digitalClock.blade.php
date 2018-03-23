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
        <span id="timeDigital">15:50</span>
    </div>
</div>

@push("afterScripts")

<script>
    $(document).ready(function(){
        startTime();
    });

    function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        m = checkTime(m);
        document.getElementById('timeDigital').innerHTML =
            h + ":" + m;
        var t = setTimeout(startTime, 10000);
    }
    function checkTime(i) {
        if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
        return i;
    }
</script>

    @endpush