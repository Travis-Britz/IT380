@extends('app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-bullhorn pull-right"></span> Subject: {{ DB::table('content')->select('title')->where('content_id','517')->first()->title }}</h3>

                </div>
                <ul class="list-group">
                    <li class="list-group-item">When <span class="pull-right">Today 9:15 AM</span></li>
                    <li class="list-group-item">Where <span class="pull-right">WH 284A</span></li>
                    <li class="list-group-item">Who <span class="glyphicon glyphicon-chevron-right pull-right"></span><span class="pull-right">Take Attendance</span></li>

                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            {{ DB::table('content')->select('body')->where('content_id','517')->first()->body }}
        </div>
    </div>
</div>

@stop