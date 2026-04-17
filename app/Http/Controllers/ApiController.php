<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    public function login( Request $request){
        #Validar datos
        $credentials = request()->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $credentials['email'])->first();
        #Intentar iniciar sesión
        #if (auth()->attempt($credentials)) {

        if ($user && Hash::check($credentials['password'], $user->password)) {
            $token = $user->createToken($request->token_name ?? 'api-token');

            return ['token'=>$token->plainTextToken];
        }
        return ['error'=>'Datos incorectos'];
    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        return ['message'=>'Sesión cerrada'];
    }
}
