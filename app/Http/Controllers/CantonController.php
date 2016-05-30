<?php

namespace App\Http\Controllers;

use App\Canton;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class CantonController extends Controller
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
    
    public function obtenerCantones($id_provincia)
	{
		return Canton::select('id', 'nombre')->where('id_provincia', $id_provincia)->orderBy('id', 'asc')->get();
	}

	public function obtenerCanton($id)
	{
		return Canton::find($id);
	}
}
