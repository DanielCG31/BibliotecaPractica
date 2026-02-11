<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
       
    </style>
</head>
<body class="bg-gray-50 antialiased flex flex-col min-h-screen">

    <header class="fixed w-full bg-white/95 backdrop-blur-sm border-b border-gray-100 z-50 h-16 transition-all duration-300 shadow-sm">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 h-full">
            <div class="flex justify-between items-center h-full">
                
                <div class="flex-shrink-0 flex items-center">
                    <a href="#" class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 text-indigo-600">
                          <path d="M11.25 4.533A9.707 9.707 0 006 3a9.735 9.735 0 00-3.25.555.75.75 0 00-.5.707v14.25a.75.75 0 001 .707A8.237 8.237 0 016 18.75c1.995 0 3.823.707 5.25 1.886V4.533zM12.75 20.636A8.214 8.214 0 0118 18.75c.966 0 1.89.166 2.75.47v-14.25a.75.75 0 00-.5-.707A9.735 9.735 0 0018 3a9.707 9.707 0 00-5.25 1.533v14.57z" />
                        </svg>
                        <span class="text-xl font-bold text-gray-900">Biblioteca</span>
                    </a>
                </div>

                <nav class="hidden md:flex items-center space-x-8">
                    <a href="#" class="text-sm font-medium text-indigo-600">Inicio</a>
                    <a href="#" class="text-sm font-medium text-gray-600 hover:text-gray-900 transition">Catálogo</a>
                    <a href="#" class="text-sm font-medium text-gray-600 hover:text-gray-900 transition">Servicios</a>
                    <span class="h-6 w-px bg-gray-200"></span>
                    <a href="{{ route('login') }}" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 transition shadow-sm">
                        Login
                    </a>
                </nav>

                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Abrir menú principal</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div id="mobile-menu" class="hidden md:hidden bg-white border-b border-gray-200 shadow-lg absolute w-full left-0 top-16 transition-all duration-300 ease-in-out origin-top z-40">
            <div class="px-4 pt-4 pb-6 space-y-3 flex flex-col items-center">
                <a href="#" class="block px-3 py-2 text-base font-medium text-indigo-600 bg-indigo-50 rounded-md w-full text-center">Inicio</a>
                <a href="#" class="block px-3 py-2 text-base font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-md w-full text-center transition">Catálogo</a>
                 <a href="#" class="block px-3 py-2 text-base font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-md w-full text-center transition">Servicios</a>
                 <div class="w-full border-t border-gray-200 my-2"></div>
                 <a href="{{ route('login') }}" class="block w-full px-4 py-3 text-center font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 transition shadow-sm">
                    Iniciar Sesión
                </a>
            </div>
        </div>
    </header>

    <main class="flex-grow pt-header">
        
        <section class="relative bg-gray-900 h-[80vh] min-h-[600px] flex items-center overflow-hidden">
             <div class="absolute inset-0 z-0">
                <img 
                src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Biblioteca moderna" class="w-full h-full object-cover opacity-40">                
                <div class="absolute inset-0 bg-gradient-to-b from-gray-900/60 via-gray-900/80 to-gray-900"></div>
            </div>

            <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
                <h1 class="text-4xl sm:text-5xl md:text-7xl font-extrabold text-white tracking-tight mb-6">
                    El conocimiento <br class="hidden sm:block"/> al alcance de tu mano.
                </h1>
                <p class="mt-6 text-lg sm:text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    Explora nuestro vasto catálogo de libros, recursos digitales y eventos culturales. Tu próxima gran historia comienza aquí.
                </p>
                <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#" class="inline-flex items-center justify-center px-8 py-4 border border-transparent text-base font-medium rounded-lg text-white bg-indigo-600 hover:bg-indigo-700 md:text-lg md:px-10 transition-transform hover:-translate-y-1 shadow-lg shadow-indigo-600/30">
                        Explorar Catálogo
                    </a>
                    <a href="#" class="inline-flex items-center justify-center px-8 py-4 border-2 border-white/30 backdrop-blur-sm text-base font-medium rounded-lg text-white hover:bg-white/10 md:text-lg md:px-10 transition">
                        Saber más
                    </a>
                </div>
            </div>
        </section>
        
        <section class="py-16 bg-white">
             <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                 <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                     <div class="p-6">
                         <div class="w-16 h-16 bg-indigo-100 text-indigo-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" /></svg>
                         </div>
                         <h3 class="text-xl font-bold text-gray-900 mb-2">+50,000 Títulos</h3>
                         <p class="text-gray-600">Desde clásicos literarios hasta las últimas novedades científicas.</p>
                     </div>
                     <div class="p-6">
                        <div class="w-16 h-16 bg-indigo-100 text-indigo-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25" /></svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Acceso Digital</h3>
                        <p class="text-gray-600">Consulta bases de datos, e-books y revistas desde tu casa.</p>
                    </div>
                    <div class="p-6">
                        <div class="w-16 h-16 bg-indigo-100 text-indigo-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" /></svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Espacios de Estudio</h3>
                        <p class="text-gray-600">Zonas tranquilas y salas de reunión equipadas con Wi-Fi gratuito.</p>
                    </div>
                 </div>
             </div>
        </section>
    </main>

    <footer class="bg-gray-900 py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-8 text-gray-400">
            <div>
                <h4 class="text-white text-lg font-bold mb-4 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-indigo-500">
                        <path d="M11.25 4.533A9.707 9.707 0 006 3a9.735 9.735 0 00-3.25.555.75.75 0 00-.5.707v14.25a.75.75 0 001 .707A8.237 8.237 0 016 18.75c1.995 0 3.823.707 5.25 1.886V4.533zM12.75 20.636A8.214 8.214 0 0118 18.75c.966 0 1.89.166 2.75.47v-14.25a.75.75 0 00-.5-.707A9.735 9.735 0 0018 3a9.707 9.707 0 00-5.25 1.533v14.57z" />
                    </svg>
                    BiblioMunicipal
                </h4>
                <p class="mb-4">Fomentando la lectura, la cultura y el conocimiento en nuestra comunidad desde 1950.</p>
            </div>
            <div>
                <h4 class="text-white text-lg font-bold mb-4">Enlaces Rápidos</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-white transition">Sobre Nosotros</a></li>
                    <li><a href="#" class="hover:text-white transition">Horarios y Ubicación</a></li>
                    <li><a href="#" class="hover:text-white transition">Préstamos Interbibliotecarios</a></li>
                    <li><a href="#" class="hover:text-white transition">Política de Privacidad</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white text-lg font-bold mb-4">Contacto</h4>
                <ul class="space-y-2">
                    <li class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-indigo-500"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg>
                        Av. Principal 123, Ciudad
                    </li>
                    <li class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-indigo-500"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-1.36 1.744a19.253 19.253 0 01-5.248-5.248l1.744-1.36c.362-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" /></svg>
                        (555) 123-4567
                    </li>
                </ul>
            </div>
        </div>
        <div class="mt-12 pt-8 border-t border-gray-800 text-center text-sm">
            <p>&copy; 2023 Biblioteca Municipal. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Referencias a los elementos del DOM
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            // Función para alternar la visibilidad del menú
            function toggleMenu() {
                // Toggle de la clase 'hidden' de Tailwind
                mobileMenu.classList.toggle('hidden');
                
                // Actualizar atributos ARIA para accesibilidad
                const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
                mobileMenuButton.setAttribute('aria-expanded', !isExpanded);
            }

            // Event listener para el botón de hamburguesa
            mobileMenuButton.addEventListener('click', toggleMenu);

            // Cerrar el menú si se hace click fuera de él (Opcional pero recomendado para buena UX)
            document.addEventListener('click', (event) => {
                const isClickInsideMenu = mobileMenu.contains(event.target);
                const isClickOnButton = mobileMenuButton.contains(event.target);

                // Si el menú está abierto Y el click NO fue dentro del menú NI en el botón
                if (!mobileMenu.classList.contains('hidden') && !isClickInsideMenu && !isClickOnButton) {
                    toggleMenu();
                }
            });

            // Efecto de scroll en el header (Opcional: cambia la sombra al bajar)
            const header = document.querySelector('header');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 10) {
                    header.classList.add('shadow-md');
                } else {
                    header.classList.remove('shadow-md');
                }
            });
        });
    </script>
</body>
</html>
