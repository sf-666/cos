@extends("layouts.master")

@section("title")
    News
    @stop

@section("content")

    <h1>Hallo {{$name}}</h1>

    @if($name == "ardan")
        <p>Sanfte grüsse Ardan</p>
    @else
        <p>Sanfte grüsse an alle anderen</p>
    @endif
@stop