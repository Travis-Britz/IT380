@extends('app')


@section('title','Log in')
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

    <div class="row">
        <div class="col-sm-2 col-md-3 col-lg-4"></div>
        <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4">
            <form class="form-signin" method="POST" action="/auth/login">
                {!! csrf_field() !!}
                <!--<img src="{{asset('images/7-min-logo-red.png')}}" alt="Federated Insurance" width="100%">-->
                <h2 class="form-signin-heading">Sign in</h2>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="email" value="{{ old('email') }}">
                <label for="inputPassword" class="sr-only">Password</label>
                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me" name="remember"> Remember me
                    </label>
                </div>

                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>
        </div>
        <div class="col-sm-2 col-md-3 col-lg-4"></div>

    </div>
    <div class="row">
        <div class="col-xs-12" id="background-logo">
            <img src="{{ asset('images/7-min-logo-red.png') }}"/>
        </div>
    </div>

</div> <!-- /container -->




@stop