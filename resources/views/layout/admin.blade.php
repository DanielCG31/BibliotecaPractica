<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración Biblioteca</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
     @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    
    <style>
        /* Estilos base para transiciones suaves */
        body {
            font-family: 'Inter', sans-serif;
        }
        .sidebar-transition {
            transition: transform 0.3s ease-in-out;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800 font-sans antialiased flex h-screen overflow-hidden">

    <div id="sidebarOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-20 hidden lg:hidden"></div>

    <aside id="sidebar" class="fixed inset-y-0 left-0 z-30 w-64 bg-slate-900 text-white transform -translate-x-full transition-transform duration-300 ease-in-out lg:relative lg:translate-x-0 flex flex-col h-full shadow-xl">
        
        <div class="h-16 flex items-center justify-center border-b border-slate-700 bg-slate-950">
            <h1 class="text-xl font-bold flex items-center gap-2">
                <i  class="ph ph-books text-indigo-500 text-2xl"></i>
                BiblioAdmin
            </h1>
        </div>

        <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
            <p class="px-2 text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Principal</p>
            
            <a href="{{ route('home') }}" class="flex items-center gap-3 px-4 py-3  text-white rounded-lg transition-colors hover:bg-slate-700">
                <i class="ph ph-house text-xl"></i>
                <span>Inicio</span>
            </a>

            <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-800 hover:text-white rounded-lg transition-colors">
                <i class="ph ph-book-open text-xl"></i>
                <span>Libros</span>
            </a>

            <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-800 hover:text-white rounded-lg transition-colors">
                <i class="ph ph-hand-coins text-xl"></i>
                <span>Préstamos</span>
            </a>
            <a href="{{ route('categorias.index') }}" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-800 hover:text-white rounded-lg transition-colors">
                <i class="ph ph-tag text-xl"></i>
                <span>Categorias</span>
            </a>

            <div class="border-t border-slate-700 my-4"></div>

            <a href="{{ route('logout') }}" class="flex items-center gap-3 px-4 py-3 text-red-400 hover:bg-red-500/10 hover:text-red-300 rounded-lg transition-colors">
                <i class="ph ph-sign-out text-xl"></i>
                <span>Salir</span>
            </a>
        </nav>

        <div class="p-4 border-t border-slate-700 text-center text-xs text-slate-500">
            v1.0.0
        </div>
    </aside>

    <div class="flex-1 flex flex-col h-screen overflow-hidden">
        
        <header class="bg-white border-b border-gray-200 h-16 flex items-center justify-between px-4 lg:px-8 shadow-sm z-10">
            
            <button  class="lg:hidden p-2 rounded-md text-gray-600 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <i class="ph ph-list text-2xl"></i>
            </button>

            <h2 class="text-lg font-semibold lg:hidden">Dashboard</h2>

            <nav class="hidden lg:flex items-center space-x-6">
                <a href="{{ route('home') }}" class="text-sm font-medium text-gray-600 hover:text-indigo-600 transition-colors">Inicio</a>
                <a href="#" class="text-sm font-medium text-gray-600 hover:text-indigo-600 transition-colors">Usuarios</a>
                <a href="#" class="text-sm font-medium text-gray-600 hover:text-indigo-600 transition-colors">Libros</a>
                <a href="#" class="text-sm font-medium text-gray-600 hover:text-indigo-600 transition-colors">Préstamos</a>
                <a href="{{ route('categorias.index') }}" class="text-sm font-medium text-gray-600 hover:text-indigo-600 transition-colors">Categorías</a>
                <span class="h-4 w-px bg-gray-300 mx-2"></span>
                <a href="{{ route('logout') }}" class="text-sm font-medium text-red-600 hover:text-red-700 transition-colors">Salir</a>
            </nav>

            <div class="flex items-center gap-3">
                <div class="hidden sm:block text-right">
                    <p class="text-sm font-medium text-gray-900">Admin</p>
                    <p class="text-xs text-gray-500">Biblioteca Central</p>
                </div>
                <div class="h-8 w-8 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 font-bold">
                    A
                </div>
            </div>
        </header>

    
@yield('content')
       @include('partials.admin.footer')
    </div>
</body> 
</html>