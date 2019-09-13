<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        'nombre' => $faker->company,
        'direccion' => $faker->address,
        'telefono' => $faker->tollFreePhoneNumber,
        "informacion" => [
            "fecha_fundacion" => $faker->date($format = 'Y-m-d', $max = 'now'),
            "email" => $faker->email,
            "dominio" => $faker->domainName,
            "tarjeta" => $faker->creditCardDetails
        ]
    ];
});
