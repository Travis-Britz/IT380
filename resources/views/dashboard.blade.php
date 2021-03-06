@extends('app')

@section('title','Dashboard')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            @if (session('loginMessage'))
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <span class="glyphicon glyphicon-info-sign"></span> Welcome back, <strong>{{ Auth::user()->name }}</strong>!<br><br>
            </div>
            @endif
            
            <div id="todays-meeting" class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-bullhorn pull-right"></span> Today's Meeting</h3>

                </div>
                <div class="list-group">

                    <!--                    A few dummy list items for now-->
                    <a href="{{ url('meetings', [701]) }}" class="list-group-item">
                        Ladder Safety Training <span class="glyphicon glyphicon-chevron-right pull-right"></span><span class="pull-right">9:15AM</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-time pull-right"></span> Upcoming Meetings
                    </h3>
                </div>


                <!-- List group -->
                <div class="list-group">

                    <!--                    A few dummy list items for now-->
                    <a href="{{ url('meetings', [701]) }}" class="list-group-item">
                        Toxic Materials Training <span class="glyphicon glyphicon-chevron-right pull-right"></span>
                        <span class="pull-right">1d 13h</span>
                    </a>

                    @foreach($upcoming_meetings as $meeting)
                    <a href="{{ url('meetings',[$meeting->meeting_id]) }}" class="list-group-item"> 
                        {{ $meeting->topics()->first()->title }} 
                        <span class="glyphicon glyphicon-chevron-right pull-right"></span>
                        <span class="pull-right">
                            {{ date_diff(date_create(date('Y-m-d')), date_create($meeting->start))->format('%r%ad %hh') }}
                        </span>
                        <br/>

                    </a>
                    @endforeach

                    <a id="new-meeting" href="{{ url('meetings/create') }}" class="list-group-item list-group-item-info">
                        Schedule New Meeting <span class="glyphicon glyphicon-plus pull-right"></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-time pull-right"></span> Previous Meetings</h3>
                </div>


                <!-- List group -->
                <div class="list-group">

                    <a href="{{ url('meetings', [701]) }}" class="list-group-item">
                        Heavy Lifting Training <span class="glyphicon glyphicon-chevron-right pull-right"></span>
                        <span class="pull-right">-0d 18h</span>
                    </a>
                    @foreach($previous_meetings as $meeting)
                    <a href="{{ url('meetings',[$meeting->meeting_id]) }}" class="list-group-item"> 
                        {{ $meeting->topics()->first()->title }} <span class="glyphicon glyphicon-chevron-right pull-right"></span>
                        <span class="pull-right">-{{ date_diff(date_create(date('Y-m-d')), date_create($meeting->start))->format('%ad %hh') }}</span>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>












@stop
