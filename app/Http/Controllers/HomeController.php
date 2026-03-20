<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use Illuminate\Support\Facades\Auth;
use App\Models\Prestamo;

class HomeController extends Controller
{
    public function index()
    {
       $user = Auth::user();
        
        if ($user->user_type === 'admin') {
            $libros = Libro::with('categoria')->paginate(4);
            $totalLibros = Libro::count();

            $prestamos = Prestamo::with('libro', 'usuario')->latest()->take(5)->get();
            return view('home.index', compact('libros', 'totalLibros', 'prestamos'));
        } 
        
        elseif ($user->user_type === 'user') {
            return view('home.index_user');
        } 
    }

   
}
