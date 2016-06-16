<?php

namespace App\Http\Controllers;

use App\Distrito;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class DistritoController extends Controller
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

	public function distritos()
	{
		return Distrito::select('id', 'nombre')->orderBy('id', 'asc')->get();
	}

    public function obtenerDistritos($id_canton)
	{
		return Distrito::select('id', 'nombre')->where('id_canton', $id_canton)->orderBy('id', 'asc')->get();
	}

	public function obtenerDistrito($id)
	{
		return Distrito::find($id);
	}
}
