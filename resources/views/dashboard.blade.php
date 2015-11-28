@extends('app')

@section('title','Dashboard')

@section('content')

<style>
    .list-group-item:hover,.panel-body:hover{
        background-color:lightgrey;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-bullhorn pull-right"></span> Today's Meeting</h3>

                </div>
                <div class="panel-body">
                    Ladder Safety Training <span class="glyphicon glyphicon-chevron-right pull-right"></span><span class="pull-right">9:15AM</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-time pull-right"></span> Upcoming Meetings</h3>
                </div>


                <!-- List group -->
                <ul class="list-group">
                    <li class="list-group-item">Toxic Materials Training <span class="glyphicon glyphicon-chevron-right pull-right"></span><span class="pull-right">3d 13h</span></li>
                    <li class="list-group-item">Heavy Lifting Training <span class="glyphicon glyphicon-chevron-right pull-right"></span><span class="pull-right">5d 12h</span></li>
                    <li class="list-group-item">Lorem ipsum dolor sit <span class="glyphicon glyphicon-chevron-right pull-right"></span><span class="pull-right">1w 2d</span></li>
                    <li class="list-group-item">Sed tristique ante in nulla laoreet <span class="glyphicon glyphicon-chevron-right pull-right"></span><span class="pull-right">1w 4d</span></li>
                    <li class="list-group-item">Vestibulum at eros <span class="glyphicon glyphicon-chevron-right pull-right"></span><span class="pull-right">2w 0h</span></li>
                </ul>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-time pull-right"></span> Previous Meetings</h3>
                </div>


                <!-- List group -->
                <ul class="list-group">
                    <li class="list-group-item">Toxic Materials Training <span class="glyphicon glyphicon-chevron-right pull-right"></span><span class="pull-right">3d 13h</span></li>
                    <li class="list-group-item">Heavy Lifting Training <span class="glyphicon glyphicon-chevron-right pull-right"></span><span class="pull-right">5d 12h</span></li>
                    <li class="list-group-item">Lorem ipsum dolor sit <span class="glyphicon glyphicon-chevron-right pull-right"></span><span class="pull-right">1w 2d</span></li>
                    <li class="list-group-item">Sed tristique ante in nulla laoreet <span class="glyphicon glyphicon-chevron-right pull-right"></span><span class="pull-right">1w 4d</span></li>
                    <li class="list-group-item">Vestibulum at eros <span class="glyphicon glyphicon-chevron-right pull-right"></span><span class="pull-right">2w 0h</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>












@stop