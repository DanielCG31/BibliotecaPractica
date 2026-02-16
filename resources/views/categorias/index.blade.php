@extends('layout.admin')
@section('content')

    <div class="p-4">
        <h1 class="text-2xl font-bold mb-4">Categorías</h1>
        <div class="bg-white shadow rounded-lg p-6">
            <table class="w-full table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-b">ID</th>
                        <th class="px-4 py-2 border-b">Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categorias as $categoria)
                    <tr>
                        <td class="px-4 py-2 border-b">{{ $categoria->id }}</td>
                        <td class="px-4 py-2 border-b">{{ $categoria->nombre }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection