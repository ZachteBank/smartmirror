<?php
/**
 * Created by PhpStorm.
 * User: bramk
 * Date: 28-12-2017
 * Time: 11:13
 */

?>
@extends('%smartmirror.layouts.default')

@section('title', _("Groep toevoegen"))

@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h4>{{__("Groep toevoegen")}}</h4>
                <div class="clearfix"></div>
            </div>
            <form id="formGenerateForm" action="{{route("debugPost")}}" data-parsley-validate method="post">
            {!! csrfFields() !!}
            <div class="x_content form-horizontal form-label-left">
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">{{__("Naam")}} <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="name" name="name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="group">{{__("Onderdeel van")}} <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="group" id="group" class="form-control col-md-7 col-xs-12 selectpicker" data-live-search="true" multiple>
                                <optgroup label="Zorggroep">
                                    <option>Woning 4</option>
                                    <option>Woning 5</option>
                                    <option>Woning 6</option>
                                </optgroup>
                                <optgroup label="Vitalis">
                                    <option>Woning 7</option>
                                    <option>Woning 9</option>
                                    <option>Woning 10</option>
                                </optgroup>
                            </select>

                            </select>
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


@endsection
