<?php

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaTablaSeeder extends Seeder
{

    public function run()
    {
        $categorias = [
            'Aseo',
            'Canasta Familiar',
            'Electrodomestico',
            'Tecnologia',
            'Ropa'
        ];

        foreach($categorias as $categoria)
        {
              Categoria::create(['descripcion' => $categoria]);
        }
    }
}
