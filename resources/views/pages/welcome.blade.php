@extends('app')

@section('title', config('app.name'))

@section('content')
    <h1>Hello from Quebec !</h1>

    <p>It's currently {{ date('G:i') }}.</p>
@endsection