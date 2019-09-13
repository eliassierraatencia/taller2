<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Factura;
use Faker\Generator as Faker;

$factory->define(Factura::class, function (Faker $faker) {
    return [
        'fecha' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'cliente_id' => function () {
            return factory(App\Models\Cliente::class)->create()->id;
        }
    ];
});
