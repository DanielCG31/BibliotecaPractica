@extends('layout.admin')

@section('content')

<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-6">
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-4">Crear Prestamo</h1>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('prestamos.buscar_usuario') }}" method="POST" class="bg-white p-6 rounded shadow-md">
            @csrf
            <div class="mb-4">
                <label for="usuario_id" class="block text-gray-700 font-bold mb-2">ID Usuario:</label>
                <input type="text" name="usuario_id" id="usuario_id" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300">
                <label for="usuario_nombre" class="block text-gray-700 font-bold mb-2">Usuario:</label>
                <input type="text" name="usuario_nombre" id="usuario_nombre" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div class="mb-4">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 py-2 rounded">Buscar</button>
                <a href="{{ route('prestamos.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold px-4 py-2 rounded ml-2">Cancelar</a>
            </div>
        </form>
            
        @isset($usuario)
            <div class="mt-6 bg-white p-6 rounded shadow-md">
                <h2 class="text-xl font-bold mb-4">Resultados de la búsqueda:</h2>
                <p><strong>ID:</strong> {{ $usuario->id }}</p>
                <p><strong>Nombre:</strong> {{ $usuario->name }}</p>
                <p><strong>Email:</strong> {{ $usuario->email }}</p>
            </div>

            <form action="{{ route('prestamos.select_libro') }}" method="POST" class="bg-white p-6 rounded shadow-md mt-6">
                @csrf
                <input type="hidden" name="usuario_id" value="{{ $usuario->id }}">
                <input type="submit" name="usuario_nombre" value="Seleccionar Libro" class="bg-green-500 hover:bg-green-700 text-white font-bold px-4 py-2 rounded">
            </form>
        @endisset
    </div>
</main>
@endsection