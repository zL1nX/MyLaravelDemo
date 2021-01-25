<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel-formDemo - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('static/bootstrap/css/bootstrap.css')}}">
    @section('style')
        @show
</head>
<body>
@section('header')
<div class="jumbotron">
    <div class="container">
        <h2>学习Laravel</h2>
        <p>A laravel Form</p>
    </div>
</div>
    @show
<div class="container">

    <div class="row">
        <div class="col-md-3">
            @section('leftmenu')
            <div class="list-group">
                <a href="{{url('student/index')}}" class="list-group-item {{Request::getPathInfo()!='/student/create'?'active':''}}">
                    学生列表
                </a>
                <a href="{{url('student/create')}}" class="list-group-item {{Request::getPathInfo()=='/student/create'?'active':''}}">
                    新增学生
                </a>
            </div>
            @show
        </div>
        <div class="col-md-9">
            @yield('content')
        </div>
    </div>
</div>
@section('footer')
<div class="jumbotron" style="margin:0;">
    <div class="container">
        <span>@2018 maxiz</span>
    </div>
</div>
@show
<script src="{{asset('static/jquery/jquery-3.2.0.min.js')}}"></script>
<script src="{{asset('static/bootstrap/js/bootstrap.min.js')}}"></script>
@section('javascript')
@show
</body>
</html>