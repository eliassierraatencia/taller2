<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Proveedor;
use Faker\Generator as Faker;

$factory->define(Proveedor::class, function (Faker $faker) {
    return [
        'nombre' => $faker->company,
        'direccion' => $faker->address,
        'telefono' => $faker->tollFreePhoneNumber                             
    ];
});
