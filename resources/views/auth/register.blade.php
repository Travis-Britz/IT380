@extends('app')


@section('title','Register')
@section('content')

<style>

    .centered-form{
        margin-top: 60px;
    }

    .centered-form .panel{
        background: rgba(255, 255, 255, 0.8);
        box-shadow: rgba(0, 0, 0, 0.3) 10px 10px 10px;
    }
</style>

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

    <div class="container">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Create Account</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="/auth/register">
                            {!! csrf_field() !!}

                            <div class="row">
                                <div class="col-xs-6 col-sm-8 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="name" id="first_name" class="form-control input-sm" placeholder="Username" value="{{ old('name') }}">
                                    </div>
                                </div>
                            </div>                            <div class="row">

                                <div class="col-xs-6 col-sm-8 col-md-12">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address" value="{{ old('email') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-6 col-sm-8 col-md-12">
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-xs-6 col-sm-8 col-md-12">
                                    <div class="form-group">
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-8 col-md-12">

                                    <input type="submit" value="Register" class="btn btn-info btn-block">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> <!-- /container -->




@stop