@extends('admin.layout.app')
@section('content')
<div class="container">
    <section class="error-wrapper">
        <i class="icon-500"></i>
        <h1>Ouch!</h1>
        <h2>500 Page Error</h2>
        <p class="page-500">Looks like Something went wrong. <a href="{{route('home')}}">Return Home</a></p>
    </section>
</div>
@endsection
