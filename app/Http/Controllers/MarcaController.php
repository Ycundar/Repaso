<?php

namespace App\Http\Controllers;
use App\Models\Marca;

use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function index (){
        //$categoria = Categoria::all ();
        $marca = Marca:: select ('id','nombre')
        ->orderBy('nombre','desc')

        ->get();

        return[
            "marca"=>$marca
        ];

    }
    //
    public function store (request $request){
        $marca = new Marca ();
        $marca-> nombre = $request -> nombre;
        $marca -> estado = $request -> edo;

        $marca ->save();
}
    public function update (Request $request){
        $marca = Marca ::findOrFail($request ->id);
        $marca -> nombre = $request -> nombre;
        $marca -> estado = $request -> edo;

        $marca ->save();
}

public function destroy (Request $request){
    $marca = Marca ::findOrFail($request ->id);
    $marca-> delete();

}
//En este metodo:  lo que se hace es listar en el frontend
public function getMarca (){
     $marca = Marca:: select ('id','nombre')
    ->where('estado',1)
    ->get();

    return[
        "marc"=>$marca
    ];

}
}



