@extends('layout.auth')

@section('content')
<main class="flex-grow flex flex-col justify-center py-6 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md mb-6">
        <h2 class="mt-2 text-center text-2xl font-bold tracking-tight text-gray-900">
            Portal de Biblioteca
        </h2>
    </div>

    <div class="sm:mx-auto sm:w-full sm:max-w-[1200px] px-4">
        <div class="bg-white shadow-xl sm:rounded-2xl overflow-hidden border border-gray-100">
            <div class="grid grid-cols-1 lg:grid-cols-2 divide-y lg:divide-y-0 lg:divide-x divide-gray-100">
                <!-- Sección Login -->
                <div class="py-8 px-6 sm:px-10 bg-white">
                    <div class="mb-6 text-center sm:text-left">
                        <div class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-indigo-50 mb-3 text-indigo-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 tracking-tight">Bienvenido de nuevo</h3>
                        <p class="mt-1 text-sm text-gray-500">Credenciales de acceso.</p>
                    </div>

                    <form class="space-y-4" action="#" method="POST">
                        @csrf
                        <div>
                            <label for="login_email" class="block text-sm font-medium leading-6 text-gray-900">Correo</label>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                        <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                    </svg>
                                </div>
                                <input id="login_email" name="email" type="email" autocomplete="email" required 
                                    class="block w-full rounded-lg border-0 py-2.5 pl-9 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                    placeholder="correo@ejemplo.com">
                            </div>
                        </div>

                        <div>
                            <div class="flex items-center justify-between">
                                <label for="login_password" class="block text-sm font-medium leading-6 text-gray-900">Contraseña</label>
                                <div class="text-sm">
                                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500 text-xs">¿Olvidaste tu contraseña?</a>
                                </div>
                            </div>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input id="login_password" name="password" type="password" autocomplete="current-password" required 
                                    class="block w-full rounded-lg border-0 py-2.5 pl-9 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                    placeholder="••••••••">
                            </div>
                        </div>

                        <div class="pt-2">
                            <button type="submit" class="flex w-full justify-center rounded-lg bg-indigo-600 px-3 py-2.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 hover:shadow-md focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition-all duration-200">
                                Iniciar Sesión
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Sección Registro -->
                <div class="py-8 px-6 sm:px-10 bg-gray-50/80">
                    <div class="mb-6 text-center sm:text-left">
                        <div class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-teal-50 mb-3 text-teal-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 019.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 tracking-tight">Crear cuenta</h3>
                        <p class="mt-1 text-sm text-gray-500">Regístrate para reservar libros.</p>
                    </div>

                    <form class="space-y-4" action="{{ route('register') }}" method="POST" id="register">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nombre</label>
                            <div class="mt-1">
                                <input type="text" name="name" id="name" autocomplete="given-name" required
                                    class="block w-full rounded-lg border-0 py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Correo</label>
                            <div class="mt-1">
                                <input id="email" name="email" type="email" autocomplete="email" required 
                                    class="block w-full rounded-lg border-0 py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Contraseña</label>
                                <div class="mt-1">
                                    <input id="password" name="password" type="password" autocomplete="new-password" required 
                                        class="block w-full rounded-lg border-0 py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div>
                                <label for="password_confirmation" class="block text-sm font-medium leading-6 text-gray-900">Confirmar</label>
                                <div class="mt-1">
                                    <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required 
                                        class="block w-full rounded-lg border-0 py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>

                        <div class="pt-2">
                            <button type="submit" class="flex w-full justify-center rounded-lg bg-white border-2 border-indigo-600 px-3 py-2.5 text-sm font-semibold leading-6 text-indigo-700 shadow-sm hover:bg-indigo-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition-all duration-200">
                                Registrarse
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection