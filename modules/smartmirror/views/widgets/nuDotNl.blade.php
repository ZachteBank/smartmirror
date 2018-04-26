<?php
/**
 * Created by PhpStorm.
 * User: bramk
 * Date: 23-3-2018
 * Time: 13:40
 */
?>

<div class="x_panel bg-black white-text">
    <div id="nuDotNl" class="x_content text-center hidden">
        <ul class="today"></ul>
        <ul class="tomorrow"></ul>
        <span></span>
    </div>
</div>

<style>
    #nuDotNl ul{
        list-style-type: none;
        font-size: 20px;
        overflow: hidden;
    }

    #nuDotNl ul li:first-child
    {
        font-weight: bold;
        font-size: 30px;
        /*border-bottom: 0px;*/
    }

    #nuDotNl ul li {
        /*border-bottom: 1px solid rgba(255,255,255,0.6);
        padding-bottom: 5px;*/
        overflow: hidden;
    }

    #nuDotNl ul li:last-child {
        /*border-bottom: 0px;*/
    }

    #nuDotNl ul li hr{
        margin: 5px auto;
        width: 40%;

        border-color: rgba(255,255,255,0.6);
    }

    #nuDotNl ul li div{
        display: inline-block;
        text-align: center;
    }

    #nuDotNl ul li div.stripe{
        text-align: center;
    }
</style>

@push("afterScripts")
    <script>
        var $nuData;
        $(document).ready(function () {

            $nuData = $("#nuDotNl");
            $nuData.hide();
            $nuData.removeClass("hidden");

            console.log("Starting with calendar");
            loadRSS('{{route("rss.NuDotNl")}}');
        });

        function loadRSS(url) {

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

        }

        function callBack(data) {
            console.log("Callback");
            console.log(data);

            var $today = $("#nuDotNl ul.today");
            $today.empty();

            WriteRss($today, data);
            $nuData.fadeIn("slow");
        }

        function WriteRss($obj, data) {
            console.log("Nieuws");

            $obj.append("<li>"+"Nieuws:"+"</li>");
            var first = true;
            for (var item of data.items) {
                var string = "<li class=''>";

                if(first){
                    first = false;
                }else{
                    string += "<hr>";
                }
                string += "<div class='summary col-md-12'>" + item.title + "</div>";

                string += "</li>";
                $obj.append(string);
            }
        }

        /**
         * @param {Date} date1 Date1
         * @param {Date} date2 Date2
         */

    </script>


@endpush