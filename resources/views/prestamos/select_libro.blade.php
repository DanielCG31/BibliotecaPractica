@extends('layout.admin')

@section('content')

<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-6">
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-4">Seleccionar Libro</h1>

        <div class="mb-4">
            <p><strong>ID Usuario:</strong> {{ $usuario->id }}</p>
            <p><strong>Nombre:</strong> {{ $usuario->name }}</p>
            <p><strong>Email:</strong> {{ $usuario->email }}</p>
        </div>


        <form action="{{ route('prestamos.store') }}" method="POST" class="bg-white p-6 rounded shadow-md">
            @csrf
            <input type="hidden" name="usuario_id" value="{{ $usuario->id }}">

            <div class="mb-4">
                <label for="libro_id" class="block text-gray-700 font-bold mb-2">Libro:</label>
                <select name="libro_id" id="libro_id" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
                    <option value="">Selecciona un libro...</option>
                    @foreach($libros as $libro)
                        <option value="{{ $libro->id }}">{{ $libro->nombre }}</option>
                    @endforeach
                </select>
                
                <input type="hidden" name="usuario_id" value="{{ $usuario->id }}">
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 py-2 rounded">Crear Prestamo</button>
                <a href="{{ route('prestamos.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold px-4 py-2 rounded ml-2">Cancelar</a>
            </div>
        </form>
    </div>
</main>
@endsection