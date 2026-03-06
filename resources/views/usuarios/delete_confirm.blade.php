@extends('layout.admin')

@section('content')

<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-6">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold mb-4">Eliminar Usuario</h1>
            <p>¿Estás seguro de que deseas eliminar este usuario?</p>

            <table class="w-full text-left text-sm text-gray-600">
                <thead class="bg-gray-50 text-gray-900 font-semibold border-b border-gray-200">
                    <tr>
                        <th scope="col" class="px-6 py-4 whitespace-nowrap">ID</th>
                        <th scope="col" class="px-6 py-4 whitespace-nowrap">Nombre</th>
                        <th scope="col" class="px-6 py-4 whitespace-nowrap">Email</th>
                        <th scope="col" class="px-6 py-4 whitespace-nowrap">Tipo</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{ $usuario->id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $usuario->name}}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $usuario->email }}</td>
                        <td class="px-6 py-4 whitespace-nowrap"> {{ $usuario->user_type }} </td>
                    </tr>
                </tbody>
            </table>


            <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="flex items-center gap-4 mt-4">
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold px-4 py-2 rounded">Eliminar</button>
                    <a href="{{ route('usuarios.index') }}" class="inline-block bg-gray-500 hover:bg-gray-700 text-white font-bold px-4 py-2 rounded">Cancelar</a>
                </div>
            </form>
        </div>
    </main>

@endsection