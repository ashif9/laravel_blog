@extends('layout.header')

@section('content')
    <h2>{{ $blog->title }}</h2>
    <p>{{ $blog->body }}</p>
    <a href="/blogs"><-- Back to main page</a>
@endsection