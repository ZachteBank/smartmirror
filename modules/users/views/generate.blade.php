<?php
/**
 * Created by PhpStorm.
 * User: bramk
 * Date: 28-12-2017
 * Time: 11:13
 */

?>
@extends('%masterlight.layouts.default')

@section('title', _("Users"))

@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h4>{{__("Users")}}</h4>
                <div class="clearfix"></div>
            </div>
            <form id="formGenerateForm" action="{{route("debugPost")}}" data-parsley-validate method="post">
            {!! csrfFields() !!}
            <div class="x_content form-horizontal form-label-left">
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="datetime">{{__("Verzenddatum")}} <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="datetime-local" id="datetime" name="datetime" required="required" value="{{date("Y-m-d\TH:i")}}" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="receiver">{{__("Ontvanger(s)")}} <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select data-live-search="true" data-actions-box="true" data-selected-text-format="count" title="{{__("Selecteer één of meerdere ontvangers")}}" name="receiver[]" multiple data-live-search="true" class="form-control col-md-7 col-xs-12 selectpicker">
                                <option value="bram@cre8media.nl" data-subtext="bram@cre8media.nl">BramKempen b.v.</option>
                                <option value="michiel@cre8media.nl" data-subtext="michiel@cre8media.nl">Cox b.v.</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subject">{{__("Onderwerp")}} <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="subject" name="subject[]" required="required" value="" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                    <div class="message">
                        <div class="ln_solid"></div>
                        <div class="float-left"><a class="mailAddMessage" href="!#"><i class="fa fa-plus fa-2x"></i></a></div>
                        <div class="float-right"><a class="mailCloseMessage" href="!#"><i class="fa fa-times fa-2x"></i></a></div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">{{__("Titel")}} <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="title" name="title[]" required="required" value="" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="text">{{__("Bericht")}} <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                    @component('%gentelella.components.textarea', ["textAreaName"=>"text[]", "options"=>["hyperlink"=>false, "image"=>false]]) @endcomponent
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="btn">{{__("Knop")}} <span class="required">*</span>
                            </label>
                            <div id="btnActiveDiv" class="col-md-6 col-sm-6 col-xs-12 btnActiveDiv">
                                <input type="checkbox" name="btn[]" id="btnActive" class="form-control col-md-7 col-xs-12 js-switch btnActive" checked>
                            </div>
                        </div>

                        <div class="form-group btnHide">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="btnText">{{__("Knop tekst")}} <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="btnText" name="btnText[]" required="required" value="" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group btnHide">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="btnUrl">{{__("Knop url")}} <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="btnUrl" name="btnUrl[]" required="required" value="" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">{{__("Afbeelding")}} <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                @component('%gentelella.components.imageUpload', ["name"=>"image[]"]) @endcomponent
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ln_solid"></div>


                <div class="row">
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-primary">{{__("Verzenden")}}</button>
                        </div>
                    </div>
                </div>
            </div>
                <input type="hidden" value="" id="IdsInOrder" name="IdsInOrder">
            </form>

        </div>
    </div>

    @foreach($templates as $template)
        <div class="col-md-3">
            <div class="x_panel">
                <div class="x_content">
                    {{$template}}
                </div>
            </div>
        </div>
    @endforeach

@endsection

@push("scripts")
    <script>
        var messageDiv = null;
        $(document).ready(function () {
            messageDiv = $(document).find(".message").clone();
            console.log(messageDiv);
        });
        $(document).on('change', ".btnActive", function() {
            if($(this).prop("checked")){
                $(this).closest(".message").find(".btnHide").show();
                console.log("changed, show");
            }else{
                $(this).closest(".message").find(".btnHide").hide();
                console.log("changed, hide");
            }
        });

        $(document).on("click", ".mailCloseMessage", function (e) {
            e.preventDefault();
           $(this).closest(".message").remove();
        });

        var checkbox = "<input type=\"checkbox\" name=\"btn[]\" id=\"btnActive\" class=\"form-control col-md-7 col-xs-12 js-switch btnActive\" checked>\n";

        $(document).on("click", ".mailAddMessage", function (e) {
            e.preventDefault();
            var original = $(this).closest(".message");
            //var lastMessage = $(document).find(".message").last();

            var message = messageDiv.clone();
            message.insertAfter(original);
            message.find(".btnActiveDiv").empty();
            message.find(".btnActiveDiv").html(checkbox);

            var elem = message.find('.js-switch');
            var init = new Switchery(elem[0],{color:'#26B99A'});
        });
    </script>
@endpush
