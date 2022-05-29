@extends('layout.app')

@section('title')
    Barmajli | Dashboard
@endsection

@section('content')
    <div class="container mt-100">
        Hello : {{ auth()->user()->first_name }}
    </div>
@endsection
