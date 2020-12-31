@extends('app')

@section('title', config('app.name'))

@section('content')
    <img src="{{ asset('/img/senegal.jpeg') }}" alt="Sénégal Flag">

    <h1>Hello from Quebec !</h1>

    <p>It's currently {{ date('G:i') }}.</p>
@endsection