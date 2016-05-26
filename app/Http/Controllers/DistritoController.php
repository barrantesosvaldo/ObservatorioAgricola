<?php

namespace App\Http\Controllers;

use App\Distrito;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DistritoController extends Controller
{
    public function obtenerDistritos($id_canton)
	{
		return Distrito::select('id', 'nombre')->where('id_canton', $id_canton)->orderBy('id', 'asc')->get();
	}

	public function obtenerDistrito($id)
	{
		return Distrito::find($id);
	}
}
