@extends('layout.admin')

@section('content')
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-6"> 
    <div class="container mx-auto"> 
        <h1 class="text-2xl font-bold mb-4">Agregar Libro</h1>
        
        <form action="{{ route('libros.store') }}" method="POST" class="bg-white shadow rounded-lg p-6">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 font-bold mb-2">Título del Libro:</label>
                <input type="text" name="nombre" id="nombre" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
            </div>
            
            <div class="mb-4">
                <label for="isbn" class="block text-gray-700 font-bold mb-2">ISBN del Libro:</label>
                <input type="text" name="isbn" id="isbn" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
            </div>
            <div class="mb-4">
                <label for="autor" class="block text-gray-700 font-bold mb-2">Autor del Libro:</label>
                <input type="text" name="autor" id="autor" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
            </div>
            <div class="mb-4">
                <label for="editorial" class="block text-gray-700 font-bold mb-2">Editorial del Libro:</label>
                <input type="text" name="editorial" id="editorial" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
            </div>
            <div class="mb-4">
                <label for="categoria" class="block text-gray-700 font-bold mb-2">Categoría del Libro:</label>
                <select name="categoria" id="categoria" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
                    <option value="">Selecciona una categoría</option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold px-4 py-2 rounded">Guardar Libro</button>
            <a href="{{ route('home') }}" class="ml-4 bg-gray-500 hover:bg-gray-700 text-white font-bold px-4 py-2 rounded">Cancelar</a>
        </form>
    </div>
  </main>
@endsection
