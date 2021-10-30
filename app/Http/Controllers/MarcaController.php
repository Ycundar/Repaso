<?php

namespace App\Http\Controllers;
use App\Models\Marca;

use Illuminate\Http\Request;

class MarcaController extends Controller
{
    //
    public function store (request $request){
        $marca = new Marca ();
        $marca-> nombre = $request -> nombre;
        $marca -> estado = $request -> edo;

        $marca ->save();

}
}
