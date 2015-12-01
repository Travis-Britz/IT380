@extends('app')

@section('title','Incident Report')

@section('content')

<div class="container">
    <h1>Create an Incident Report</h1>
    {!! Form::open() !!}
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="form-group">
                {!! Form::label('employees', 'Employees Involved:') !!}
                <select class="form-control" name="employees" size="10" multiple>
                    @foreach(DB::table('employee')->select('employee_id as id', 'firstname', 'lastname')->orderBy('lastname')->get() as $emp)
                    <option value="{{ $emp->id }}">{{ $emp->firstname }} {{ $emp->lastname }}</option>
                    @endforeach
                </select>
                <span class="text-muted">
                    <span class="glyphicon glyphicon-info-sign"></span>
                    Hold ctrl or shift (or drag with the mouse) to select more than one
                </span>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="form-group">
                <label for="summary">Incident Summary:</label>
                <textarea class="form-control" rows="5" name="summary"></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-4">
            <div class="form-group">
                {!! Form::label('img','Upload Image:') !!}
                {!! Form::file('img') !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="form-group">
                {!! Form::submit('Submit',['class' => 'btn btn-primary form-control']) !!}
            </div>
        </div>
    </div>

</div>

@stop