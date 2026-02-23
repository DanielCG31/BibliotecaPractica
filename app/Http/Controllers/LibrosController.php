<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Libro;

class LibrosController extends Controller
{
    public function index()
    {
        $libros = Libro::with('categoria')->get();
        return view('libros.index', compact('libros'));
    }
    public function create()
    {
        $categorias = Categoria::all();
        return view('libros.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'isbn' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'editorial' => 'required|string|max:255',
            'categoria' => 'required|exists:categorias,id',
        ]);

        // Crear un nuevo libro
        $libro = new Libro();
        $libro->nombre = $request->nombre;
        $libro->isbn = $request->isbn;
        $libro->autor = $request->autor;
        $libro->editorial = $request->editorial;
        $libro->categoria_id = $request->categoria;
        $libro->save();

        // Redirigir a la página de inicio con un mensaje de éxito
        return redirect()->route('home')->with('success', 'Libro agregado exitosamente.');
    }

}
