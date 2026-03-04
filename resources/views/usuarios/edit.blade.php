@extends('layout.admin' )

@section('content')

    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-6">
        <div class="container mx-auto">
            
        <h1 class="text-2xl font-bold mb-4">Editar Usuario</h1>
        <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST" class="bg-white shadow rounded-lg p-6">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre del Usuario:</label>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $usuario->name) }}" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
                @error('nombre')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div >
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Correo Electrónico:</label>
                    <input type="email" name="email" id="email" value="{{ old('email', $usuario->email) }}" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="user_type" class="block text-gray-700 font-bold mb-2">Tipo de usuario:</label>
                    <select name="user_type" id="user_type" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
                        <option value="">Seleccione un tipo</option>
                        <option value="admin" {{old('user_type', $usuario->user_type) == 'admin' ? 'selected'  : ''}}>Administrador</option>
                        <option value="user" {{old('user_type', $usuario->user_type) == 'user' ? 'selected' : ''}}>Usuario</option>
                    </select>
                    @error('user_type')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
</div>
            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold px-4 py-2 rounded">Actualizar Usuario</button>
            <a href="{{ route('usuarios.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold px-4 py-2 rounded inline-block">Cancelar</a>
        </div>
        </form>
    </div>
    </main>

@endsection