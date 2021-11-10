<?php

namespace App\Http\Controllers;

use App\Models\categoria;

use Illuminate\Http\Request;


class CategoriaController extends Controller
{
    //En este metoco:  lo que se hace es listar las categorias
    public function index (){
        //$categoria = Categoria::all ();
        $categoria = Categoria:: select ('id','nombre')
        ->orderBy('nombre','asc')

        ->get();

        return[
            "cat"=>$categoria
        ];

    }
     //En este metodo:  lo que se hace  es registrar en las Registrar las categorias que tendremos
    public function store (request $request){
        $categoria = new Categoria ();
        $categoria-> nombre = $request -> nombre;
        $categoria -> estado = $request -> edo;

        $categoria ->save();

    }
    //En este metodo:  lo que se hace es Actualizar, datos o corregimos la tabla categoria
    public function update (Request $request){
            $categoria = Categoria ::findOrFail($request ->id);
            $categoria-> nombre = $request -> nombre;
            $categoria -> estado = $request -> edo;

            $categoria ->save();
        }
        //En este metodo:  lo que se hace es eliminar

    public function destroy (Request $request){
            $categoria = Categoria ::findOrFail($request ->id);
            $categoria-> delete();

        }
        //En este metodo:  lo que se hace es listar en el frontend
        public function getCategoria (){
            $categoria = Categoria:: select ('id','nombre')
            ->where('estado',1)
            ->get();

            return[
                "cat"=>$categoria
            ];

    }
}

