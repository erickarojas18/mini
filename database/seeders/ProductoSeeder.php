<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::create(['nombre' => 'Producto 1', 'precio' => 1500.00, 'stock' => 10]);
        Producto::create(['nombre' => 'Producto 2', 'precio' => 3000.00, 'stock' => 20]);
    }
}
