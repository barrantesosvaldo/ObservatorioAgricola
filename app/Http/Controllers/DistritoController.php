<?php

namespace App\Http\Controllers;

use App\Distrito;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DistritoController extends Controller
{
    public function obtenerDistritos($id)
	{
		return Distrito::select('id', 'nombre')->where('id_canton', $id)->orderBy('id', 'asc')->get();
	}
}
