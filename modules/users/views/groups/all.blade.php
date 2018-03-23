<?php
/**
 * Created by PhpStorm.
 * User: bramk
 * Date: 28-12-2017
 * Time: 11:13
 */

?>
@extends('%smartmirror.layouts.default')

@section('title', _("Overzicht groepen"))

@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h4>{{__("Overzicht groepen")}}</h4>
                <div class="clearfix"></div>
            </div>

            <table class="table table-striped table-bordered datatable">
                <thead>
                    <tr>
                        <th>{{__("Groep")}}</th>
                        <th>{{__("Onderdeel van")}}</th>
                        <th>{{__("Actie(s)")}}</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>

        </div>
    </div>

    
@endsection
