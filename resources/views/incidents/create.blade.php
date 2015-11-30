@extends('app')

@section('title','Dashboard')

@section('content')







<div class="container">
    
	<h1>Incident Report</h1>
	
	<h2>Employees Involved</h2>
	<div class="container">
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<select name="employees" data-selectr-opts='{ "title": "Employees", "placeholder": "Search Employees" }'  multiple>
						
						@foreach(DB::table('employee')->select('employee_id as id', 'firstname', 'lastname')->get() as $emp)
						<option value="{{ $emp->id }}">{{ $emp->firstname }} {{ $emp->lastname }}</option>
						@endforeach

					</select>
				</div>
			</div>
		</div>
	</div>
	
	<h2>Incident Summary</h2>
	<textarea rows="10" cols="51" spellcheck="false">
	</textarea>
	
	
	<form action="choose_image.asp">
		Add Image: <input type="file" name="img">
		<input type="submit">
	</form>
	
</div>




@stop