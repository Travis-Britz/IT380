@extends('app')

@section('title','Schedule Meeting')

@section('content')




<div class="container">
    <h1>Schedule a Meeting</h1>
    {!! Form::open() !!}
    <div class="row">
        <div class="col-xs-12 col-sm-8">
            <div class='form-group'>
                {!! Form::label('subject', 'Subject:') !!}
                {!! Form::text('subject', null, ['class' => 'form-control']) !!}
            </div>
        </div>
    <div class="form-group">
            <div class='col-xs-12 col-sm-4'>
                <div class="form-group">
                        {!! Form::label('start', 'When:') !!}

                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' class="form-control" />
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
    <div class='form-group'>
        {!! Form::submit('Add Meeting',['class' => 'btn btn-primary form-control']) !!}

    </div>

    {!! Form::close() !!}

</div>




@stop