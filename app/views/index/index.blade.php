@extends('layout')

@section('content')

<div class="hero-unit">
    <h1>Tripelp <small>The first stop for all your trips</small></h1>
    <p style="margin-top: 15px">
        <a href="{{ action('TripController@add') }}" class="btn btn-large btn-primary">Add a trip</a>
        <a href="{{ action('TripController@plan') }}" class="btn btn-large btn-primary">Plan a trip</a>
    </p>
</div>

@stop