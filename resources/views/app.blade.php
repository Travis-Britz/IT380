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
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <title>@yield('title')</title>
    </head>
    <body>
        
        @include('titlebar')

        @yield('content')
    </body>
</html>
