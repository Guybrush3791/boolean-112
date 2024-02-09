@extends('layouts.main-layout')
@section('head')

    <title>Test 2</title>

@endsection
@section('content')

<h1 class="text-light">Hello, World!</h1>
<img src="{{ Vite::asset('resources/imgs/me.png') }}" width="300px">

@endsection
