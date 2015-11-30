@extends('app')

@section('title','Incident Report')

@section('content')

<div class="container">
    
    <h1>Create an Incident Report</h1>
        <div class="form-group">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <h3>Employees Involved</h3>
                    <select name="employees" size="7" data-selectr-opts='{ "title": "Employees", "placeholder": "Search Employees" }'  multiple>
                            @foreach(DB::table('employee')->select('employee_id as id', 'firstname', 'lastname')->get() as $emp)
                            <option value="{{ $emp->id }}">{{ $emp->firstname }} {{ $emp->lastname }}</option>
                            @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <h3>Incident Summary</h3>
                    <textarea rows="10" cols="51" spellcheck="false"></textarea>
                    <form action="choose_image.asp">
                        Add Image: <input type="file" name="img">
                    </form>
                    <input type="submit" value="Submit">
                </div>
            </div
        </div>
</div>

@stop