<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/all.css')}}">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                @if(Auth::guest())
                    <a href="/" class="navbar-brand">学生成绩管理</a>
                @else
                    @if(Auth::user()->is_admin)
                        <a href="/admin" class="navbar-brand">学生成绩管理</a>
                    @else
                        <a href="/" class="navbar-brand">学生成绩管理</a>
                    @endif
                @endif
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="http://www.golaravel.com" target="__blank">Power by Laravel5.2</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::guest())
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name}}<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{url('/logout')}}">退出</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
         @include('flash')
    </div>
    @yield('content')
    <script type="text/javascript" src="{{asset('/js/all.js')}}"></script>
</body>
</html>