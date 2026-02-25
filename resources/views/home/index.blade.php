@extends('layout.admin')

@section('content')


        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-6">
            
            <div class="max-w-7xl mx-auto">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Panel de Control</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-gray-500 text-sm font-medium">Libros Totales</h3>
                            <div class="p-2 bg-blue-50 rounded-lg text-blue-600"><i class="ph ph-books text-xl"></i></div>
                        </div>
                        <p class="text-3xl font-bold text-gray-900">{{ $totalLibros }}</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-gray-500 text-sm font-medium">Préstamos Activos</h3>
                            <div class="p-2 bg-orange-50 rounded-lg text-orange-600"><i class="ph ph-clock-countdown text-xl"></i></div>
                        </div>
                        <p class="text-3xl font-bold text-gray-900">85</p>
                    </div>
                     <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-gray-500 text-sm font-medium">Usuarios</h3>
                            <div class="p-2 bg-green-50 rounded-lg text-green-600"><i class="ph ph-users text-xl"></i></div>
                        </div>
                        <p class="text-3xl font-bold text-gray-900">320</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center">
                        <h3 class="font-bold text-gray-800">Préstamos Recientes</h3>
                        <button class="text-sm text-indigo-600 hover:underline">Ver todos</button>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm text-gray-600">
                            <thead class="bg-gray-50 text-gray-900 font-semibold">
                                <tr>
                                    <th class="px-6 py-3">Libro</th>
                                    <th class="px-6 py-3">Usuario</th>
                                    <th class="px-6 py-3">Fecha Devolución</th>
                                    <th class="px-6 py-3">Estado</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4">Cien Años de Soledad</td>
                                    <td class="px-6 py-4">Juan Pérez</td>
                                    <td class="px-6 py-4">15 Oct 2023</td>
                                    <td class="px-6 py-4"><span class="px-2 py-1 rounded-full text-xs bg-green-100 text-green-700">A tiempo</span></td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4">Clean Code</td>
                                    <td class="px-6 py-4">Maria Garcia</td>
                                    <td class="px-6 py-4">12 Oct 2023</td>
                                    <td class="px-6 py-4"><span class="px-2 py-1 rounded-full text-xs bg-red-100 text-red-700">Atrasado</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
<!-- Libros -->
                <div class="mt-8 bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center">
                        <h3 class="font-bold text-gray-800">Lista de libros con paginacion</h3>
                        <a href="{{ route('libros.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium py-2 px-4 rounded-lg flex items-center gap-2 transition-colors">
                            <i class="ph ph-plus-circle text-lg"></i>
                            Agregar libro
                        </a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm text-gray-600" >
                            <thead class="bg-gray-50 text-gray-900 font-semibold">
                                <tr>
                                    <th class="px-6 py-3">Título</th>
                                    <th class="px-6 py-3">Autor</th>
                                    <th class="px-6 py-3">ISBN</th>
                                    <th class="px-6 py-3">Editorial</th>
                                    <th class="px-6 py-3">Categoría</th>
                                    <th class="px-6 py-3 text-right">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                @foreach($libros as $libro)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 font-medium text-gray-900">{{ $libro->nombre }}</td>
                                    <td class="px-6 py-4">{{ $libro->autor }}</td>
                                    <td class="px-6 py-4">{{ $libro->isbn }}</td>
                                    <td class="px-6 py-4">{{ $libro->editorial }}</td>
                                    <td class="px-6 py-4">{{ $libro->categoria->nombre }}</td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="{{ route('libros.edit', $libro->id) }}" class="text-gray-400 hover:text-indigo-600 transition-colors"><i class="ph ph-pencil-simple text-lg"></i></a>
                                        <form action="{{ route('libros.destroy', $libro->id) }}" method="POST" class="inline" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este libro?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-gray-400 hover:text-red-600 transition-colors"><i class="ph ph-trash text-lg"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            
                        </table>
                    </div>
                    <div class="px-6 py-4 border-t border-gray-100">
                        {{ $libros->links() }}
                    </div>
                </div>
            </div>

        </main>
@endsection