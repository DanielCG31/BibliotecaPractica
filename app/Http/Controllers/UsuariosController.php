<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|max:255|confirmed|min:8',
            'password_confirmation' => 'required|string|max:255|min:8',
            'user_type' => 'required|string|max:255',
        ]);

        $user = new User();
        $user->name = $request->nombre;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->user_type = $request->user_type;
        $user->save();

        return redirect()->route('usuarios.index')->with('success', 'Usuario creado exitosamente.');
    }

    public function edit($id)
    {
        $usuario = User::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $id,
            'user_type' => 'required|string|max:255|in:admin,user',
        ]);

        $usuario = User::findOrFail($id);
        $usuario->name = $request->nombre;
        $usuario->email = $request->email;
        $usuario->user_type = $request->user_type;
        $usuario->save();

        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado exitosamente.');
    }


    public function delete_confirm($id)
    {
        $usuario = User::findOrFail($id);
        return view('usuarios.delete_confirm', compact('usuario'));
    }

    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();

        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado exitosamente.');
    }

    public function profile()
    {
        $usuario = User::findOrFail(Auth::user()->id);
        return view('usuarios.profile', compact('usuario'));
    }

    public function update_profile(Request $request)
    {
        $usuario = User::findOrFail(Auth::user()->id);

        $request->validate([
            'nombre' => 'required|string|max:255', 
        ]);

        $usuario->name = $request->nombre;
        $usuario->save();

        return redirect()->route('usuarios.profile')->with('success', 'Perfil actualizado exitosamente.');
    }

    public function update_password(Request $request)
    {
        $usuario = User::findOrFail(Auth::user()->id);

        $request->validate([
            'current_password' => 'required|string|min:8',
            'new_password' => 'required|string|min:8|confirmed',
            'new_password_confirmation' => 'required|string|min:8',
        ]);

        if (!password_verify($request->current_password, $usuario->password)) {
            return redirect()->route('usuarios.profile')->withErrors(['current_password' => 'La contraseña actual es incorrecta.']);
        }
        

        $usuario->password = bcrypt($request->new_password);
        $usuario->save();

        return redirect()->route('usuarios.profile')->with('success', 'Contraseña actualizada exitosamente.');
    }
}

