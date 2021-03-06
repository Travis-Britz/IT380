@extends('app')

@section('title','Schedule Meeting')

@section('content')




<div class="container">
    @if (count($errors) > 0)
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <h1>Schedule a Meeting</h1>
    {!! Form::open(['url'=>'meetings']) !!}
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
                {!! Form::label('location', 'Where:') !!}
                {!! Form::text('location', old('location'), ['class' => 'form-control', 'placeholder' => 'Location']) !!}
            </div>
            <div class='col-xs-12 col-sm-4'>
                <div class="form-group">
                    {!! Form::label('start', 'When:') !!}

                    <div class='input-group date' id='datetimepicker1'>
                        {!! Form::text('start', (old('start')) ? old('start') : date('m/d/Y 9:15', strtotime('next monday')), ['class' => 'form-control', 'placeholder' => 'Start Time']) !!}
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
                <select name="attendees[]" data-selectr-opts='{ "title": "Attendees", "placeholder": "Search Employees" }'  multiple>

                    @foreach(DB::table('employee')->select('employee_id as id', 'firstname', 'lastname')->orderBy('lastname')->get() as $emp)
                    <option value="{{ $emp->id }}" @if((old('attendees')) && (in_array($emp->id, old('attendees')))) selected @endif>{{ $emp->firstname }} {{ $emp->lastname }}</option>
                    @endforeach

                </select>
            </div>
            <div class="col-xs-12 col-sm-6">

                <select name="content[]" data-selectr-opts='{ "title": "Topics", "placeholder": "Search Topics" }'>

                    @foreach(DB::table('content')->select('content_id as id', 'title')->get() as $content)
                    <option value="{{ $content->id }}" @if((old('content')) && (in_array($content->id, old('content')))) selected @endif>{{ $content->title }}</option>
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