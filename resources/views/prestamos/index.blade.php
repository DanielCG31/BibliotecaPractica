@extends('layout.admin')

@section('content')
 <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-6">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold mb-4">Prestamos</h1>

             @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
            @endif

            <a href="{{ route('prestamos.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 py-2 rounded mb-4 inline-block">Crear Prestamo</a>
            <div class="bg-white shadow rounded-lg overflow-hidden">
                
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-gray-600">
                    <thead class="bg-gray-50 text-gray-900 font-semibold border-b border-gray-200">
                        <tr>
                            <th scope="col" class="px-6 py-4 whitespace-nowrap">ID</th>
                            <th scope="col" class="px-6 py-4 whitespace-nowrap">Usuario</th>
                            <th scope="col" class="px-6 py-4 whitespace-nowrap">Libro</th>
                            <th scope="col" class="px-6 py-4 whitespace-nowrap">Fecha de Préstamo</th>
                            <th scope="col" class="px-6 py-4 whitespace-nowrap">Estatus</th>
                            <th scope="col" class="px-6 py-4 whitespace-nowrap">Fecha de Entrega</th>
                            <th scope="col" class="px-6 py-4 whitespace-nowrap text-right">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach($prestamos as $prestamo)
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{ $prestamo->id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $prestamo->usuario->name ?? 'Usuario no encontrado' }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $prestamo->libro->nombre ?? 'Libro no encontrado' }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $prestamo->created_at }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($prestamo->estado == 'pendiente')
                                        <span class="px-2 py-1 rounded-full text-xs bg-red-100 text-red-700">Pendiente</span>
                                    @else
                                        <span class="px-2 py-1 rounded-full text-xs bg-green-100 text-green-700">Entregado</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $prestamo->fecha_entrega ? $prestamo->fecha_entrega : 'No entregado' }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    @if($prestamo->estado == 'pendiente')
                                    <a href="{{ route('prestamos.entregar', $prestamo->id) }}" class="text-green-600 hover:text-green-900 mr-3">Entregar
                                        <i class="ph ph-check text-xl"></i>
                                    </a>
                                    @endif
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