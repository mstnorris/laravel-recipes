<nav class="navbar navbar-default navbar-fixed-top navbar-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Recipes</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/modules"><i class="fa fa-fw fa-cubes"></i> Modules</a></li>
                <li><a href="/assignments"><i class="fa fa-fw fa-file-text-o"></i> Assignments</a></li>
                <li><a href="/timetable"><i class="fa fa-fw fa-calendar"></i> Timetable</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                {{--<li><a href="#">--}}
                        {{--<span class="label label-danger"><i class="fa fa-fw fa-bell"></i> 3</span></a></li>--}}
                <li><a href="{{ route('new_recipe_path') }}"><i class="fa fa-fw fa-plus"></i></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false"><i class="fa fa-fw fa-user"></i> Michael Norris <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('all_recipes_path') }}"><i class="fa fa-fw fa-cutler"></i> Home</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>