<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-5">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('index') }}">Learning Laravel</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="#">Laravel Guide</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Learning <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="dropdown-header">Learning Menu</li>
                        <li><a href="{{ route('learning.level.index', ['beginner']) }}">for Beginner</a></li>
                        <li><a href="#">for Intermediate</a></li>
                        <li><a href="#">for Senior</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-right" role="search">
                <div class="form-search search-only">
                    <i class="search-icon glyphicon glyphicon-search"></i>
                    <input class="form-control search-query" type="text">
                </div>
            </form>
        </div>
    </div><!-- /.container -->
</nav><!-- /.navbar -->
