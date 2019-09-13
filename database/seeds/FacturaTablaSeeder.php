<?php

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class FacturaTablaSeeder extends Seeder
{
   
    public function run()
    {
        $clientes = factory(Cliente::class, 5)
       ->create()
       ->each(function ($cliente) {
        	$cliente->facturas()->save(factory(App\Models\Factura::class)->make());
        });  
    }
}
