<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        DB::table('productos')->insert([
            'nombre_producto' => Str::random(10),
            'categoria' => Str::random(10),
            'precio' => rand(1,1000),
            'descripcion' => Str::random(30),
            'imagen' => Str::random(30),
        ]);
        */
        DB::table('productos')->insert([
            'nombre_producto' => "rosa",
            'categoria' => "Planta",
            'precio' => rand(1,1000),
            'descripcion' => Str::random(30),
            'imagen' => Str::random(30),
        ]);
    }
}
