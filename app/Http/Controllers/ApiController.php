<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use App\Models\Libro;
use App\Http\Resources\LibroResource;
use App\Models\Prestamo;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function login( Request $request){
        #Validar datos
        $credentials = request()->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (FacadesAuth::attempt($credentials)) {
            $user = FacadesAuth::user();
            $token = $user->createToken('api-token')->plainTextToken;

            return ['token'=>$token];
        }
        // $user = User::where('email', $credentials['email'])->first();
        // #Intentar iniciar sesión
        // #if (auth()->attempt($credentials)) {

        // if ($user && Hash::check($credentials['password'], $user->password)) {
        //     $token = $user->createToken($request->token_name ?? 'api-token');

        //     return ['token'=>$token->plainTextToken];
        // }
        return ['error'=>'Datos incorectos'];
    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        return ['data'=>'Sesión cerrada'];
    }

    public function libros_disponibles(){
        $libros = Libro::where('estatus', 0)->orderBy('id','asc')->get();
        $libros_resource = LibroResource::collection($libros);
        return $libros_resource;
    }

    public function entrega_libro(Request $request){
        $request->validate([
            'prestamo_id' => 'required|integer|exists:prestamos,id',
        ]);

        $id = $request->input('prestamo_id');

        DB::beginTransaction();
        try{
            $prestamo = Prestamo::findOrFail($id);
            $prestamo->estado = 'entregado';
            $prestamo->save();

            $libro = Libro::findOrFail($prestamo->libro_id);
            $libro->estatus = 0;
            $libro->save();

            DB::commit();
            return ['data'=>'Libro entregado correctamente'];
        }
        catch(\Exception $e){
            DB::rollBack();
            return ['error'=>'Error al entregar el libro: '.$e->getMessage()];
        }
    }
}
