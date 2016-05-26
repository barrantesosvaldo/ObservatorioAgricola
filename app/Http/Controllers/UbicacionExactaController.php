<?php
namespace App\Http\Controllers;
use App\UbicacionExacta;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UbicacionExactaController extends Controller
{
    public function obtenerUbicacionExacta($id)
	{
		return UbicacionExacta::find($id);
	}
}