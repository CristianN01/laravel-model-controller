@extends('layouts.app')

@section('page-title', 'Movies')

@section('main-content')
    <h1>
        Movies
    </h1>

    {{-- @dump($movies) --}}

    <ul>
        @foreach ($movies as $movie)
            <div class="card mycard">
                <div class="card-body">
                        <h1>
                            {{ $movie->title; }} : {{ $movie->original_title }}
                        </h1>
                        <h2>
                            Nationality: {{ $movie->nationality; }}
                        </h2>
                        Date: {{ $movie->date; }}
                        <br>
                        <em>
                            Vote: {{ $movie->vote; }}
                        </em>
                </div>
            </div>
        @endforeach
    </ul>
@endsection
