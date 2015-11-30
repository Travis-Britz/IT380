@extends('app')

@section('title','Dashboard')

@section('content')







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



@stop