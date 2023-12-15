@extends('admin.layout.app')
@section('content')
    <div class="container">

        <section class="error-wrapper">
            <i class="icon-404"></i>
            <h1>404</h1>
            <h2>page not found</h2>
            <p class="page-404">Something went wrong or that page doesn’t exist yet. <a href="{{route('home')}}">Return Home</a></p>
        </section>

    </div>
@endsection
