<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Articulo;

class TestController extends Controller
{
    //
	public function vista($id){
		$art=Articulo::find($id);
		$art->titulo;
		$art->contenido;
		$art->tags;
		return view('test.index',['art'	=> $art]);
	}

}
