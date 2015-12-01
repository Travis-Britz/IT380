@extends('app')

@section('title','Schedule Meeting')

@section('content')




<div class="container">
    <h1>Schedule a Meeting</h1>
    {!! Form::open() !!}
<!--    <div class="row">
        <div class="col-xs-12 col-sm-8">
            <div class='form-group'>
                {!! Form::label('subject', 'Subject:') !!}
                {!! Form::text('subject', null, ['class' => 'form-control', 'placeholder' => 'Meeting Topic']) !!}
            </div>
        </div>
        

    </div>-->
    <div class="form-group">

        <div class="row">
            <div class="col-xs-12 col-sm-8">
                {!! Form::label('where', 'Where:') !!}
                {!! Form::text('where', null, ['class' => 'form-control', 'placeholder' => 'Location']) !!}
            </div>
            <div class='col-xs-12 col-sm-4'>
            <div class="form-group">
                {!! Form::label('start', 'When:') !!}

                <div class='input-group date' id='datetimepicker1'>
                    {!! Form::text('start', date('m/d/Y 9:15', strtotime('next monday')), ['class' => 'form-control', 'placeholder' => 'Start Time']) !!}
<!--                        <input type='text' class="form-control" />-->
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <select name="employees" data-selectr-opts='{ "title": "Employees", "placeholder": "Search Employees" }'  multiple>
                    
                    @foreach(DB::table('employee')->select('employee_id as id', 'firstname', 'lastname')->get() as $emp)
                    <option value="{{ $emp->id }}">{{ $emp->firstname }} {{ $emp->lastname }}</option>
                    @endforeach

                </select>
            </div>
            <div class="col-xs-12 col-sm-6">
                <select name="content" data-selectr-opts='{ "title": "Topics", "placeholder": "Search Topics" }'>
                    
                    @foreach(DB::table('content')->select('content_id as id', 'title')->get() as $content)
                    <option value="{{ $content->id }}">{{ $content->title }}</option>
                    @endforeach

                </select>
            </div>
        </div>
    </div>

    <div class='form-group'>
        {!! Form::submit('Add Meeting',['class' => 'btn btn-primary form-control']) !!}

    </div>

    {!! Form::close() !!}

    <script>
        $(document).ready(function () {
            $("select").selectr();
        });
    </script>

</div>




@stop