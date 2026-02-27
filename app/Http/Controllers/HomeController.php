<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
       $user = Auth::user();
        
        if ($user->user_type === 'admin') {
            $libros = Libro::with('categoria')->paginate(4);
            $totalLibros = Libro::count();
            return view('home.index', compact('libros', 'totalLibros'));
        } 
        
        elseif ($user->user_type === 'user') {
            return view('home.index_user');
        } 
    }

   
}
