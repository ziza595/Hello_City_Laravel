@extends('app')

@section('title', 'About Us | '.config('app.name'))

@section('content')
    <img src="/img/default.png" alt="User logo">

    <p>Built with &hearts; by Abdoul Aziz.</p>

    <p><a href="{{ route('home') }}">Revenir à la page d'accueil</a></p>
@endsection