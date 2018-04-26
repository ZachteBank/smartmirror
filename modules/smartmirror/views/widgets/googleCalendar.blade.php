<?php
/**
 * Created by PhpStorm.
 * User: bramk
 * Date: 23-3-2018
 * Time: 13:40
 */
?>

<div class="x_panel bg-black white-text">
    <div id="calendar" class="x_content text-center hidden">
        <ul class="today"></ul>
        <ul class="tomorrow"></ul>
        <span></span>
    </div>
</div>

<style>
    #calendar ul{
        list-style-type: none;
        font-size: 20px;
        overflow: hidden;
    }

    #calendar ul li:first-child
    {
        font-weight: bold;
        font-size: 30px;
        border-bottom: 0px;
    }

    #calendar ul li {
        border-bottom: 1px solid rgba(255,255,255,0.6);
        padding-bottom: 5px;
        overflow: hidden;
    }

    #calendar ul li:last-child {
        border-bottom: 0px;
    }

    #calendar ul li div{
        display: inline-block;
        text-align: center;
    }

    #calendar ul li div.stripe{
        text-align: center;
    }
</style>

@push("afterScripts")
    <script>
        var $weatherdata;
        $(document).ready(function () {

            $weatherdata = $("#calendar");
            $weatherdata.hide();
            $weatherdata.removeClass("hidden");

            console.log("Starting with calendar");
            loadCalendar();
        });

        function loadCalendar() {
            var url = '{{route("google.calendar.all")}}';
            $.ajax({
                url: url,
                dataType: 'json',
                type: 'GET',
                success: function (data) {
                    console.log("Ajax done");
                    callBack(data);
                },
                error: function (data) {
                    alert("Couldn't fetch data");
                }
            });


            /*$.getJSON(url, function(data) {
                console.log("GetJson done");
                callBack(data);
            });*/
        }

        function callBack(data) {
            console.log("Callback");
            console.log(data);

            var $today = $("#calendar ul.today");
            var $tomorrory = $("#calendar ul.tomorrow");
            $today.empty();
            $tomorrory.empty();

            CALENDAR_writeCalendarToday($today, data);
            CALENDAR_writeCalendarTomorrow($tomorrory, data);
            $weatherdata.fadeIn("slow");
        }


        function CALENDAR_writeCalendarToday($obj, data) {
            console.log("today");
            var today = new Date();

            $obj.append("<li>"+"Vandaag:"+"</li>");
            for (var item of data.items) {
                var date = new Date(item.start.dateTime);
                if(compareDate(date, today)) {
                    $obj.append("<li class=''><div class='summary col-md-7'>" + item.summary + "</div>" +
                        "<div class='startDateTime col-md-2'>" + convertTime(item.start.dateTime) + "</div>" +
                        "<div class='stripe col-md-1'>-</div>" +
                        "<div class='endDateTime col-md-2'>" + convertTime(item.end.dateTime) + "</div></li>");
                }
            }
        }

        function CALENDAR_writeCalendarTomorrow($obj, data) {
            console.log(data);

            var tomorrow = new Date();
            tomorrow.setDate(tomorrow.getDate()+1);

            $obj.append("<li>"+"Morgen:"+"</li>");
            for (var item of data.items) {
                var date = new Date(item.start.dateTime);
                console.log("Date timestamp:");

                if(compareDate(date, tomorrow)) {
                    $obj.append("<li class=''><div class='summary col-md-7'>" + item.summary + "</div>" +
                        "<div class='startDateTime col-md-2'>" + convertTime(item.start.dateTime) + "</div>" +
                        "<div class='stripe col-md-1'>-</div>" +
                        "<div class='endDateTime col-md-2'>" + convertTime(item.end.dateTime) + "</div></li>");
                }
            }
        }
        /**
         * @param {Date} date1 Date1
         * @param {Date} date2 Date2
         */
function compareDate(date1, date2) {
    return (date1.getUTCDate() === date2.getUTCDate());
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