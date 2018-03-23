<?php
/**
 * Created by PhpStorm.
 * User: bramk
 * Date: 28-12-2017
 * Time: 11:13
 */

?>
@extends('%masterlight.layouts.default')

@section('title', _("Overzicht mailings"))

@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h4>{{__("Overzicht mailings")}}</h4>
                <div class="clearfix"></div>
            </div>

            <table class="table table-striped table-bordered datatable">
                <thead>
                    <tr>
                        <th>{{__("Onderwerp")}}</th>
                        <th>{{__("Datum")}}</th>
                        <th>{{__("Actie(s)")}}</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>

        </div>
    </div>




    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <script defer type="text/javascript" src="{{asset("formGeneratorBasic", "js/global.js")}}"></script>
@endsection
