<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
        <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

        <!-- Custom css-->
        <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }} ">

        <!-- Bootstrap datetimepicker -->
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-datetimepicker.css') }}">
        <script type="text/javascript" src="{{ URL::asset('js/moment.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/bootstrap-datetimepicker.js') }}"></script>

        <!-- Multi select -->
        <script type="text/javascript" src="{{ URL::asset('js/selectr.js') }}"></script>

        <title>@yield('title')</title>
    </head>
    <body>

        @include('titlebar')

        @yield('content')
    </body>
</html>
