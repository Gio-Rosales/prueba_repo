<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UsuariosController extends Controller
{
    //
    public function create(){
    	return view('admin.users.create');
    }
}
