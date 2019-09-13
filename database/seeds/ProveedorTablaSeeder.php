<?php

use Illuminate\Database\Seeder;
use App\Models\Proveedor;

class ProveedorTablaSeeder extends Seeder
{

    public function run()
    {
        factory(Proveedor::class, 5)->create();
    }
}
