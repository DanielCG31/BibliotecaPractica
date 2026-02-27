@extends('layout.admin' )

@section('content')

    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-6">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold mb-4">Editar Libro</h1>
        <form action="{{ route('libros.update', $libro->id) }}" method="POST" class="bg-white shadow rounded-lg p-6">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 font-bold mb-2">Título del Libro:</label>
                <input type="text" name="nombre" id="nombre" value="{{ $libro->nombre }}" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
            </div>
            
            <div class="mb-4">
                <label for="isbn" class="block text-gray-700 font-bold mb-2">ISBN del Libro:</label>
                <input type="text" name="isbn" id="isbn" value="{{ $libro->isbn }}" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
            </div>
            <div class="mb-4">
                <label for="autor" class="block text-gray-700 font-bold mb-2">Autor del Libro:</label>
                <input type="text" name="autor" id="autor" value="{{ $libro->autor }}" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
            </div>
            <div class="mb-4">
                <label for="editorial" class="block text-gray-700 font-bold mb-2">Editorial del Libro:</label>
                <input type="text" name="editorial" id="editorial" value="{{ $libro->editorial }}" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
            </div>
            <div class="mb-4">
                <label for="categoria" class="block text-gray-700 font-bold mb-2">Categoría del Libro:</label>
                <select name="categoria" id="categoria" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
                    <option value="">Selecciona una categoría</option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{ $libro->categoria_id == $categoria->id ? 'selected' : '' }}>{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex items-center justify-between">

                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold px-4 py-2 rounded">Actualizar Libro</button>
                <a href="{{ route('libros.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold px-4 py-2 rounded inline-block">Cancelar</a>
            </div>
        </form>
    </div>
    </main>

@endsection