@extends('app')

@section('title')
<title>Dashboard</title>
@stop



@section('content')









<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><span class="glyphicon glyphicon-bullhorn pull-right"></span> Today's Meeting</h3>

    </div>
    <div class="panel-body">
        Ladder Safety Training <span class="glyphicon glyphicon-chevron-right pull-right"></span><span class="pull-right">9:15AM</span>
    </div>
</div>

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












@stop