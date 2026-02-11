<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    //
    public function loginForm()
    {
        return view('auth.login');
    }
    public function register(Request $request)
    {
        #Validar datos
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string|min:8',
        ]);

        #Crear usuario
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
        ]);
        
        #Redirigir o iniciar sesión
        auth()->login($user);
        return redirect()->route('login')->with('success', 'Registro exitoso. ¡Bienvenido!');
    }
}
