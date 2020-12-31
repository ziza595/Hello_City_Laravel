@extends('app')

@section('title', config('app.name'))

@section('content')
    <img src="{{ asset('/img/senegal.jpeg') }}" alt="Senegal Flag" class="mt-12 rounded shadow-md">

    <h1 class="mt-5 text-3xl sm:text-5xl text-semibold text-indigo-600">Hello from Sénégal !</h1>

    <p class="text-lg text-gray-800">Il est actuellement {{ date('G:i') }}.</p>
@endsection