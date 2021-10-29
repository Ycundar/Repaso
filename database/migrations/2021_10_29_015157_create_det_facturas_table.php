<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_facturas', function (Blueprint $table) {
            $table->id();
            $table->integer('precio');
            $table->integer('cant');
            $table->integer('Total');
            $table->foreignId('id_producto')->constrained('Productos');
            $table->foreignId('id_factura')->constrained('Facturas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('det_facturas');
    }
}
