@extends('app')


@section('content')
<style>

</style>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            @if (session('success'))
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <span class="glyphicon glyphicon-ok"></span> {{ session('success') }}<br><br>
            </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-info-sign pull-right"></span> Topic: {{ $meeting->topics()->first()->title }}</h3>

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

            <h3>
                #{{ $meeting->topics()->first()->title }}
            </h3>
            @if($meeting->topics()->first()->media_type == 'video')
            <div class="youtube-container">
                <iframe class="youtube-video" src="{{ $meeting->topics()->first()->url }}" frameborder="0" allowfullscreen></iframe>
            </div>
            @elseif($meeting->topics()->first()->media_type == 'image')
            <img src="{{ $meeting->topics->first()->url }}"/>
            @endif
            {!! $meeting->topics()->first()->body !!}
        </div>
    </div>
</div>

@stop