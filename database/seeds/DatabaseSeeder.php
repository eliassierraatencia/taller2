<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        // $this->call(CategoriaTablaSeeder::class);
        //$this->call(ProveedorTablaSeeder::class);
        $this->call(FacturaTablaSeeder::class);
    }
}
