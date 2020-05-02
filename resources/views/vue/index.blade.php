@extends('layout.header')

@section('content')
    <div id="app">
        <example-component></example-component>
        <articles></articles>
    </div>
<script src="{{ asset('js/app.js') }}"></script>
@endsection
