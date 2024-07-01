@extends('layout.app')

@section('title', 'Comic details')

@section('content')

    <div class="container">
        <div class="card">
            <img src="{{ $fumetto['thumb'] }}" alt="">
        </div>
        <div class="details">
            <h3>{{ $fumetto['series'] }}</h3>
            <p>{{ $fumetto['description'] }}</p>
            <span>{{ $fumetto['price'] }}</span>
        </div>

    @endsection
