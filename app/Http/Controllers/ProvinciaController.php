<?php

namespace App\Http\Controllers;

use App\Provincia;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProvinciaController extends Controller
{
    public function obtenerProvincias()
	{
		return Provincia::select('id', 'nombre')->orderBy('id', 'asc')->get();
	}
}
