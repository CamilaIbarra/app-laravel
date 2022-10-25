<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'codigo' => '1234567890',
            'precio' => 10.00,
            'existencia' => 50,
            'categoria_id' => 1,
            'activo' => 1,
            'created_at' => now()
        ]);
    }
}
