@extends('layout.admin' )

@section('content')
    <div class="p-4">
        <h1 class="text-2xl font-bold mb-4">Editar Categoría</h1>
        <form action="{{ route('categorias.update', $categoria->id) }}" method="POST" class="bg-white shadow rounded-lg p-6">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="{{ $categoria->nombre }}" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300">
            </div>
                <div class="flex items-center justify-between">

            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold px-4 py-2 rounded">Actualizar Categoría</button>
            <a href="{{ route('categorias.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold px-4 py-2 rounded">Cancelar</a>
        </div>
        </form>
    </div>

@endsection