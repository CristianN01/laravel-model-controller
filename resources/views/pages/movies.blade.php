@extends('layouts.app')

@section('page-title', 'Movies')

@section('main-content')
    <h1>
        Movies
    </h1>

    @dump($movies)
@endsection
