@extends('layout.admin')

@section('content')
    <div class="p-4">
        <h1 class="text-2xl font-bold mb-4">Agregar Nueva Categoría</h1>
        
        <form action="{{ route('categorias.store') }}" method="POST" class="bg-white shadow rounded-lg p-6">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre de la Categoría:</label>
                <input type="text" name="nombre" id="nombre" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
            </div>
            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold px-4 py-2 rounded">Guardar Categoría</button>
            <a href="{{ route('categorias.index') }}" class="ml-4 bg-gray-500 hover:bg-gray-700 text-white font-bold px-4 py-2 rounded">Cancelar</a>
        </form>
    
    @endsection