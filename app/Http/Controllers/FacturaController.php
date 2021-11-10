<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use App\Models\DetFactura;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FacturaController extends Controller
{
    //
    public function store (Request $request){
        try{
            // inicio la transaccion en la base de datos
            DB::beginTransaction();

            $fecha = Carbon::now ("America/New_York");
            $factura = new Factura();
            // voy a guardar el maestro

            $factura->id_cliente = $request->idCliente;
            $factura->fecha = $fecha;
            $factura->iva = $request->iva;
            $factura->total = $request->total;

            // si tenemos un sistema con login podemos hacerlo de esta forma
           // $id_vendedor ->\Auth:: user()->id;

           $factura->save();

           $arrayDetalle = $request->data;

           foreach($arrayDetalle as $ep=>$det) {

            $detFactura = new DetFactura();

            $detFactura->id_factura = $factura->id;
            $detFactura->id_producto = $det['idProducto'];
            $detFactura->precio = $det['precio'];
            $detFactura->cant = $det['cant'];
            $detFactura->total = $det['precio']*$det['cant'];

            $detFactura->save();

        }

       DB::commit();
       } catch(Exception $e){
            DB: rollback();
            console.log($e);
         }
    }
}
