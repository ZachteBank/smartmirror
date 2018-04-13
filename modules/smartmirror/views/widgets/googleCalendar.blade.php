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
            writeCalendarToday(data);
            writeCalendarTomorrow(data);
        });

        function writeCalendarToday(data) {
            console.log(data);
            var today = new Date();

            $("#calendar ul").append("<li>"+"Vandaag:"+"</li>");
            for (var obj of data.items) {
                if(obj.date == today) {
                    $("#calendar ul").append("<li>" + obj.summary + " " + convertTime(obj.start.dateTime) + "-" + convertTime(obj.end.dateTime) + "</li>");
                }
            }
        }

        function writeCalendarTomorrow(data) {
            console.log(data);
            var day = new Date('Apr 30, 2000');

            var tomorrow = new Date(day);
            tomorrow.setDate(day.getDate()+1);

            $("#calendar ul").append("<li>"+"Morgen:"+"</li>");
            for (var obj of data.items) {
                if(obj.date == tomorrow) {
                    $("#calendar ul").append("<li>" + obj.summary + " " + convertTime(obj.start.dateTime) + "-" + convertTime(obj.end.dateTime) + "</li>");
                }
            }
        }

        function convertTime(time) {
            var date = new Date(time);
            console.log(date);
            var hh = dateToDouble(date.getHours());
            var mm = dateToDouble(date.getMinutes());
            return hh + ':' + mm;
        }
    </script>


@endpush