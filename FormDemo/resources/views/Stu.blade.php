@extends('layout')
@section('class1')
    @parent
    <p>sadadsa</p>
@stop
@section('class2')
    @parent
    <p>{{ $name }}</p>
@stop

@if($name == 'asd')
    ohnhooo
@else
    sdfdfs
@endif