<?php
/**
 * Created by PhpStorm.
 * User: bramk
 * Date: 23-3-2018
 * Time: 13:40
 */
?>

<div class="x_panel bg-black white-text">
    <div id="calendar" class="x_content text-center">
        <ul>

        </ul>
        <span></span>
    </div>
</div>

@push("afterScripts")
    <script>
        $.getJSON('{{route("google.calendar.all")}}', function(data) {
            console.log(data);
            writeCalendar(data);
        });

        function writeCalendar(data) {
            console.log(data);
            for (var obj of data.items) {
                $("#calendar ul").append("<li>"+obj.summary + " " + convertTime(obj.start.dateTime) + "-" + convertTime(obj.end.dateTime)+"</li>");
            }
        }

        function convertTime(time) {
            var date = new Date(time);
            console.log(date);
            var hh = date.getHours();
            var mm = date.getMinutes();
            if (mm < 10)
            {

            }
            return hh + ':' + mm;
        }
    </script>


@endpush