<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nombre_categoria' => "Planta",
        ]);
        DB::table('categorias')->insert([
            'nombre_categoria' => "Tierra",
        ]);
        DB::table('categorias')->insert([
            'nombre_categoria' => "Arbustiva",
        ]);
        DB::table('categorias')->insert([
            'nombre_categoria' => "Trepadora",
        ]);
        DB::table('categorias')->insert([
            'nombre_categoria' => "Interior",
        ]);
    }
}
