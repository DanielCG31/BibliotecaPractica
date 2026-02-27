<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
            'password' => bcrypt($validatedData['password']),
            'user_type' => 'user', // Asignar tipo de usuario por defecto
        ]);
        #Redirigir o iniciar sesión
        Auth::login($user);
        return redirect()->route('login')->with('success', 'Registro exitoso. ¡Bienvenido!');
    }

    public function login(Request $request)
    {
        #Validar datos
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        #Intentar iniciar sesión
        if (auth()->attempt($credentials)) {
            return redirect()->route('home')->with('success', 'Inicio de sesión exitoso. ¡Bienvenido!');
        }

        return back()->withErrors(['email' => 'Credenciales inválidas.']);
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
