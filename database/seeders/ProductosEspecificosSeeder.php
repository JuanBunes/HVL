<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductosEspecificosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'nombre_producto' => "Jazmin de Cabo",
            'categoria' => "Arbustiva",
            'precio' => 1800.50,
            'descripcion' => Str::random(30),
            'imagen' => Str::random(30),
        ]);
        DB::table('comentarios')->insert([
            'comentario' => "esto es un comentario.",
            'email' => "abc@ciasd.com",
            'autor' => "Juan",
            'producto_id' => 1,
        ]);
        DB::table('comentarios')->insert([
            'comentario' => "esto es otro comentario.",
            'email' => "abc@ciasd.com",
            'autor' => "Juan",
            'producto_id' => 1,
        ]);
        DB::table('comentarios')->insert([
            'comentario' => "esto es un nuevo comentario.",
            'email' => "abc123@ciasd.com",
            'autor' => "Carlos",
            'producto_id' => 1,
        ]);
        DB::table('productos')->insert([
            'nombre_producto' => "Ericas",
            'categoria' => "Arbustiva",
            'precio' => 449.99,
            'descripcion' => Str::random(30),
            'imagen' => Str::random(30),
        ]);
        DB::table('comentarios')->insert([
            'comentario' => "esto es un nuevo comentario.",
            'email' => "123asd@ciasd.com",
            'autor' => "Andrea",
            'producto_id' => 2,
        ]);
        DB::table('comentarios')->insert([
            'comentario' => "comentario1.",
            'email' => "123asd@ciasd.com",
            'autor' => "Andrea",
            'producto_id' => 2,
        ]);
        DB::table('productos')->insert([
            'nombre_producto' => "Jazmin Kimura",
            'categoria' => "Arbustiva",
            'precio' => 690,
            'descripcion' => Str::random(30),
            'imagen' => Str::random(30),
        ]);
        DB::table('comentarios')->insert([
            'comentario' => "comentario3.",
            'email' => "asddd@ciasd.com",
            'autor' => "test",
            'producto_id' => 3,
        ]);
        DB::table('productos')->insert([
            'nombre_producto' => "Rosa de Pie",
            'categoria' => "Arbustiva",
            'precio' => 1500,
            'descripcion' => Str::random(30),
            'imagen' => Str::random(30),
        ]);
        DB::table('productos')->insert([
            'nombre_producto' => "Jazmin Chino",
            'categoria' => "Trepadora",
            'precio' => 1200,
            'descripcion' => Str::random(30),
            'imagen' => Str::random(30),
        ]);
        DB::table('productos')->insert([
            'nombre_producto' => "Jazmin del Cielo",
            'categoria' => "Trepadora",
            'precio' => 890,
            'descripcion' => Str::random(30),
            'imagen' => Str::random(30),
        ]);
        DB::table('productos')->insert([
            'nombre_producto' => "Diplademias",
            'categoria' => "Trepadora",
            'precio' => 1200.99,
            'descripcion' => Str::random(30),
            'imagen' => Str::random(30),
        ]);
        DB::table('productos')->insert([
            'nombre_producto' => "Calatheas Makoyana",
            'categoria' => "Interior",
            'precio' => 1900,
            'descripcion' => Str::random(30),
            'imagen' => Str::random(30),
        ]);
        DB::table('productos')->insert([
            'nombre_producto' => "Ficus Blanco",
            'categoria' => "Interior",
            'precio' => 2400.20,
            'descripcion' => Str::random(30),
            'imagen' => Str::random(30),
        ]);
        DB::table('productos')->insert([
            'nombre_producto' => "Monstera",
            'categoria' => "Interior",
            'precio' => 2300,
            'descripcion' => Str::random(30),
            'imagen' => Str::random(30),
        ]);
        DB::table('productos')->insert([
            'nombre_producto' => "Helecho",
            'categoria' => "Interior",
            'precio' => 1200,
            'descripcion' => Str::random(30),
            'imagen' => Str::random(30),
        ]);
        DB::table('productos')->insert([
            'nombre_producto' => "Tropic",
            'categoria' => "Interior",
            'precio' => 1499.99,
            'descripcion' => Str::random(30),
            'imagen' => Str::random(30),
        ]);
        

    }
}
