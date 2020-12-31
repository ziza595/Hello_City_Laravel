@extends('app')

@section('title', 'About Us | '.config('app.name'))

@section('content')
    <img src="{{ asset('/img/default.png') }}" alt="User logo" class="my-12 rounded-full shadow-md">

    <h2 class="mb-5 text-gray-700">
        Built with <span class="text-pink-500">&hearts;</span> by Abdoul Aziz.
    </h2>

    <p>
        <a href="{{ route('home') }}" class="text-indigo-500
        hover:text-indigo-600 underline">Revenir à la page d'accueil</a>
    </p>
@endsection