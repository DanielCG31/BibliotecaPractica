@extends('layout.user')

@section('content')

    <div class="container">
        <h1>Bienvenido a la Biblioteca {{ Auth::user()->name }}</h1>
        <p>Explora nuestra colección de libros y recursos.</p>
    </div>



@endsection