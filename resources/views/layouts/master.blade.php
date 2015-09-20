<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recipes</title>
    <meta name="viewport" content="initial-scale=1">
    <link rel="stylesheet" href="{{ elixir('css/all.css') }}">

    @yield('header')

    <style>
        body {
            margin-top: 50px;
        }

        nav.navbar-top { /* some styles for row 1 */ }
        nav.navbar-top.scrolled {
            box-shadow: 0 1px 5px rgba(51, 51, 51, 0.4);
            opacity: 0.9;
        }

        .footer {
            background: #eceff1;
        }

        .panel {
            border:none;
            border-radius: 0;
            padding: 0;
            /*box-shadow: 0 2px 2px #CFD8DC;*/
        }

        .list-group-item {
            padding-top: 0;
            padding-bottom: 0;
            height: 64px;
            line-height: 64px;
            vertical-align: middle;
            border-color: #eceff1;
            font-size: 1.6em;
        }

        .panel .panel-heading {
            border-radius: 0;
            min-height: 60px;
            color: #fff;
            font-size: 1.2em;
            line-height: 48px;
            vertical-align: middle;
        }

        .panel .panel-footer {
            height: 40px;
        }

        .panel-blue-grey .panel-heading {
            background: #607d8b;
        }

        .panel-purple .panel-heading {
            background: #8E24AA;
        }
    </style>
</head>
<body>
@include('layouts.partials._navigation')

@yield('content')

@include('layouts.partials._footer')

<script src="{{ elixir('js/all.js') }}"></script>
<script>
    $(document).scroll(function(){
        $('nav.navbar-top').toggleClass('scrolled', $(this).scrollTop() > 1);
    });
</script>
@yield('footer')

</body>
</html>