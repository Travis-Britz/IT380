<nav class="navbar navbar-default">
    <div class="container-fluid">    

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">




            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="{{ url('/') }}"><span class="glyphicon glyphicon-home"></span></a>



        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


            <ul class="nav navbar-nav navbar-right">

                @if (Auth::guest())
                <li><a href="{{ url('/auth/login') }}">Login</a></li>
                <li><a href="{{ url('/auth/register') }}">Register</a></li>
                @else
                <li><a href="#">Notifications <span class="badge">{{69}}</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> {{Auth::user()->name}} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('incident/create') }}"><span class="glyphicon glyphicon-comment"></span> Report Incident</a></li>
                        <li class="disabled"><a href="#"><span class="glyphicon glyphicon-cog"></span> Account</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ url('/auth/logout') }}"><span class="glyphicon glyphicon-off"></span> Log Out</a></li>
                    </ul>
                </li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
