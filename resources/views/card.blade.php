@extends('layout.app')

@section('title', 'Comics list')

@section('content')

    <div class="container">
        @foreach ($listFumetti as $indice => $element)
            <div class="card">
                <a href="{{ route('comics-list-details', ['indice' => $indice]) }}">
                    <img src="{{ $element['thumb'] }}" alt="">
                </a>
                <h3>{{ $element['series'] }}</h3>
            </div>
        @endforeach

    </div>

@endsection
