@extends('layout.admin')

@section('content')
    <div class="p-4">
        <h1 class="text-2xl font-bold mb-4">Libros</h1>

         @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('libros.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 py-2 rounded mb-4 inline-block">Agregar Libro</a>

        <div class="bg-white shadow rounded-lg p-6">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-4 py-2 border-b">Nombre</th>
                        <th scope="col" class="px-4 py-2 border-b">ISBN</th>
                        <th scope="col" class="px-4 py-2 border-b">Autor</th>
                        <th scope="col" class="px-4 py-2 border-b">Editorial</th>
                        <th scope="col" class="px-4 py-2 border-b">Categoría</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($libros as $libro)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $libro->nombre }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $libro->isbn }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $libro->autor }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $libro->editorial }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $libro->categoria->nombre ?? 'Sin categoría' }}</td>
                            <td class="px-4 py-2 border-b">
                            <a href="" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold px-4 py-2 rounded inline-block">Editar</a>
                            <form action="" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold px-4 py-2 rounded">Eliminar</button>
                            </form>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection