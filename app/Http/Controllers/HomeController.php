<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class HomeController extends Controller
{
    public function index()
    {
        $libros = Libro::with('categoria')->paginate(4);
        $totalLibros = Libro::count();
        return view('home.index', compact('libros', 'totalLibros'));
    }

   
}
