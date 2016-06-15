<?php

namespace App\Http\Controllers;
use App\User;

use Hash;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class UserController extends Controller
{
	/**
	 * No permite el acceso a las funcionalidades del controlador si no ha iniciado sesión
	 */
	/*public function __construct()
    {
        // Apply the jwt.auth middleware to all methods in this controller
        // except for the authenticate method. We don't want to prevent
        // the user from retrieving their token if they don't already have it
        $this->middleware('jwt.auth');
    }*/

	public function guardarUsuario(Request $request)
	{
		/*User::insert([
    		['name' => $request.nombre, 'email' => $request.correo, 'password' => Hash::make($request.contrasenna), 'created_at' => Carbon::now()]
    		]);*/

		$usuario = new User;
		$usuario->name = $request->input('nombre');
		$usuario->email = $request->input('correo');
		$usuario->password = Hash::make($request->input('contrasenna'));
		$usuario->save();
		return 'Usuario guardado correctamente';
	}
}

