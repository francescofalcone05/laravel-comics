@extends('layout.app')

@section('title', 'Comics list')

@section('content')

    <div class="container">
        @foreach ($list as $element)
            <div class="card">
                <img src="{{ $element['thumb'] }}" alt="">
                <h3>{{ $element['series'] }}</h3>
            </div>
        @endforeach

    </div>

@endsection
