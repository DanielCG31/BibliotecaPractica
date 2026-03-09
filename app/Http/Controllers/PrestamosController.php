<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestamo;

class PrestamosController extends Controller
{
    public function index()
    {
        $prestamos = Prestamo::with('libro', 'usuario')->get();
        return view('prestamos.index', compact('prestamos'));
      
    }
}
