<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Producto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function ( Blueprint $table )
        {  
        
        $table->BigIncrements( 'id'); // id autoincrementable
        $table->String( 'clave', 25 ); // Varchar
        $table->String( 'producto', 200 ); //Varchar
        $table->unsignedBigInteger( 'existencias'); //int
        $table->float( 'precio_unitario', 10, 2 ); // float
        $table->enum('unidad_medida',
        [
            'Pieza',
            'Caja',
            'Kilogramo',
            'Metro',
            'Bolsa',
            'otro'
        ]
        );// Opciones
        $table->enum('estatus',
        [
            'Activo',
            'Inactivo'
        ]
        ); //Opciones
        $table->timestamps();//created_at y updated_at de laravel
        }
    );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){Schema::dropIfExists('producto');
     }
}
