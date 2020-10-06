<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Package;
use Faker\Generator as Faker;

$factory->define(Package::class, function (Faker $faker) {
    return [
        'libelle'=>$faker->domainName,
        'mensualite'=>rand(10000, 500000),
        'jour_avant_premier_rappel'=>rand(70,100),
        'jour_avant_deuxieme_rappel'=>rand(30, 70),
        'jour_avant_troisieme_rappel'=>rand(10,30),
        'is_active'=>rand(0,1)
        
    ];
});
