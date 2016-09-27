@extends("layouts.master")

@section("title")
    News
    @stop

@section("content")
    @include("elements.greeting")
    <h1>Hallo Du</h1>

@stop


@section("footer")
    @parent
    <h1>Footer2</h1>

@stop
