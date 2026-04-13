@extends('layout.admin')
@section('content')

    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-6">
        <div class="container mx-auto">

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">¡Éxito!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif
        @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">¡Error!</strong>
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
        @endif

        <h1 class="text-2xl font-bold mb-4">Perfil de Usuario</h1>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <form action="{{ route('usuarios.update_profile') }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')

                    <div>
                        <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre</label>
                        <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $usuario->name) }}" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300">
                    </div>
                    @error('nombre')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror

                    <div class="flex justify-end">
                        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ">Actualizar Perfil</button>
                    </div>
                </form>

                <form action="{{ route('usuarios.update_password') }}" method="POST" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <div>
                        <label for="current_password" class="block text-gray-700 font-bold mb-2">Contraseña Actual</label>
                        <input type="password" name="current_password" id="current_password" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300">
                    </div>
                        @error('current_password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror

                    <div>
                        <label for="new_password" class="block text-gray-700 font-bold mb-2">Nueva Contraseña</label>
                        <input type="password" name="new_password" id="new_password" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300">
                    </div>
                    @error('new_password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                    <div>
                        <label for="new_password_confirmation" class="block text-gray-700 font-bold mb-2">Confirmar Nueva Contraseña</label>
                        <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300">
                    </div>
                    @error('new_password_confirmation')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                    <div class="flex justify-end">
                        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Actualizar Contraseña</button>
                    </div>

                </form>
            </div>
        </div>
    </main>

@endsection