<?php

namespace App\Http\Controllers;

use App\Canton;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CantonController extends Controller
{
    public function obtenerCantones($id_provincia)
	{
		return Canton::select('id', 'nombre')->where('id_provincia', $id_provincia)->orderBy('id', 'asc')->get();
	}

	public function obtenerCanton($id)
	{
		return Canton::find($id);
	}
}
