@extends('app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-info-sign pull-right"></span> Subject: {{ $meeting->topics()->first()->title }}</h3>

                </div>
                <ul class="list-group">
                    <li class="list-group-item">When <span class="pull-right">Today 9:15 AM</span></li>
                    <li class="list-group-item">Where <span class="pull-right"> {{ $meeting->location }}</span></li>
                    <li class="list-group-item">Who <span class="glyphicon glyphicon-chevron-right pull-right"></span><span class="pull-right">Take Attendance</span></li>

                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <h4>
                #{{ $meeting->topics()->first()->title }}
            </h4>
            <iframe src="https://www.youtube.com/embed/weqPwlhU7WU" frameborder="0" allowfullscreen></iframe>

            <h4>
                #{{ $meeting->topics()->first()->title }}
            </h4>
            <p>
                {{ $meeting->topics()->first()->body }}
            </p>
            <h4>
                #{{ $meeting->topics()->first()->title }}
            </h4>
            <p>
                {{ $meeting->topics()->first()->body }}
            </p>
        </div>
    </div>
</div>

@stop