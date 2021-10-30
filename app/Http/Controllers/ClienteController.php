<?php

namespace App\Http\Controllers;
use App\Models\cliente;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //
    public function store (request $request){
        $cliente = new cliente ();
        $cliente -> tp_doc  = $request -> tp_doc;
        $cliente -> num_doc = $request -> num_doc;
        $cliente -> nombres  = $request -> nombres;
        $cliente -> apellidos  = $request -> apellidos;
        $cliente -> telefono  = $request -> telefono;
        $cliente -> direccion  = $request -> direccion;
        $cliente -> email  = $request -> email;
        $cliente -> edo  = $request -> edo;

        $cliente ->save();
    }
}
