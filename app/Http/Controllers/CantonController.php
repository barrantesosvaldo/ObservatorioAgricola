<?php

namespace App\Http\Controllers;

use App\Canton;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CantonController extends Controller
{
    public function obtenerCantones()
	{
		return Canton::select('id', 'nombre')->orderBy('id', 'asc')->get();
	}
}
