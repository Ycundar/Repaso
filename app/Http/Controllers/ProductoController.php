<?php

namespace App\Http\Controllers;
use App\Models\Producto;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
//En este metodo:  lo que se hace es listar las categorias
public function index (){
   $producto = Producto ::join ('categorias', 'productos.id_categoria','=', 'categorias.id')
   ->join ('marcas', 'productos.id_marca','=', 'marcas.id')
   -> select ('productos.nombre','productos.precio','productos.cant',
    'categorias.nombre as Categoria', 'marcas.nombre as Marcas')->get();

    return[
        'producto'=>$producto
    ];

 }
    public function store (Request $request){
        $producto = new Producto();
        $producto->cod_prod = $request->codProd;
        $producto->nombre = $request->nombre;
        $producto->precio   = $request->precio;
        $producto->cant     = $request->cant;
            if($request -> cant >12){
                $producto -> precio = $request->precio*0.95;
            } else{
                $producto -> precio = request -> precio;

        $producto->fec_venc = $request->fecvenc;
        $producto->estado = $request->estado;
        $producto->id_marca = $request->idMarca;
        $producto->id_categoria   = $request->idCat;
        $producto->save();
}


}

}
