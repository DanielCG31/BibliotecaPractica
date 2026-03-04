@extends('layout.admin')

@section('content')
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-6">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold mb-4">Lista de Usuarios</h1>

         @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('usuarios.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 py-2 rounded mb-4 inline-block">Crear Usuario</a>

        <div class="bg-white shadow rounded-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-gray-600">
                    <thead class="bg-gray-50 text-gray-900 font-semibold border-b border-gray-200">
                        <tr>
                            <th scope="col" class="px-6 py-4 whitespace-nowrap">ID</th>
                            <th scope="col" class="px-6 py-4 whitespace-nowrap">Nombre</th>
                            <th scope="col" class="px-6 py-4 whitespace-nowrap">Email</th>
                            <th scope="col" class="px-6 py-4 whitespace-nowrap">Tipo</th>
                            <th scope="col" class="px-6 py-4 whitespace-nowrap text-right">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach($usuarios as $usuario)
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{ $usuario->id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $usuario->name}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $usuario->email }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $usuario->user_type }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="{{ route('usuarios.edit', $usuario->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">
                                        <i class="ph ph-pencil-simple text-xl"></i>
                                    </a>
                                    <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" class="inline-block" onsubmit="return confirm('¿Confirma eliminar este usuario?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900">
                                            <i class="ph ph-trash text-xl"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            
        </div>
    </div>
    </main>

@endsection