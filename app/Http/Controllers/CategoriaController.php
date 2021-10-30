<?php



namespace App\Http\Controllers;
use App\Models\categoria;

use Illuminate\Http\Request;


class CategoriaController extends Controller
{
    //
    public function index (){
        //$categoria = Categoria::all ();
        $categoria = Categoria:: select ('id','nombre')
        ->orderBy('nombre','asc')

        ->get();

        return[
            "cat"=>$categoria
        ];

    }


    public function store (request $request){
        $categoria = new Categoria ();
        $categoria-> nombre = $request -> nombre;
        $categoria -> estado = $request -> edo;

        $categoria ->save();




    }
}
