@extends('layouts.app')

@section('page-title', 'Movies')

@section('main-content')
    <h1>
        Movies
    </h1>

    {{-- @dump($movies) --}}

    <ul>
        @foreach ($movies as $movie)
            <li>
                <pre>
                    {{ $movie->title; }} : {{ $movie->original_title }}
                    Nationality: {{ $movie->nationality; }}
                    Date: {{ $movie->date; }}
                    Vote: {{ $movie->vote; }}
                </pre>

            </li>
        @endforeach
    </ul>
@endsection
