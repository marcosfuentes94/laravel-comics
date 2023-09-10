@extends('app')

@section('content')
    <h1>Laravel Comics</h1>

    <ul>
        @foreach ($comics as $comic)
            <li>
                <h2>{{ $comic['title'] }}</h2>
                <p>{{ $comic['description'] }}</p>
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" />
                <p>Prezzo: {{ $comic['price'] }}</p>
                <p>Serie: {{ $comic['series'] }}</p>
                <p>Data di vendita: {{ $comic['sale_date'] }}</p>
                <p>Tipo: {{ $comic['type'] }}</p>
            </li>
        @endforeach
    </ul>
@endsection
