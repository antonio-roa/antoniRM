<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class productos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i<=100; $i++){
            DB::table('producto')->insert([
                'clave' => Str::random(25),
                'producto' => Str::random(15),
                'existencias' => $i, 
                'precio_unitario' => $i + 50.00,
                'unidad_medida' => 'Pieza',
                'estatus' => 'Activo'
            ]);
        }
    }
}