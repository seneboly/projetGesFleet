<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Entreprise;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Entreprise::class, function (Faker $faker) {
    return [
    	'nom_entreprise'=>$faker->company,
        'package_id'=>rand(1,5),
        'code_entreprise'=>rand(100000, 10000000),
        'chiffre_affaire'=>rand(1000000, 9000000000),
        'nombre_collaborateurs'=>rand(5, 800),
        'logo'=>$faker->imageUrl(100, 80),
        'date_creation'=>Carbon::parse('10 years ago')->format('Y-m-d'),
        'debut_souscription'=>Carbon::parse('1 month ago')->format('Y-m-d'),
        'fin_souscription'=>Carbon::now()->format('Y-m-d'),
        'is_active'=>rand(0, 1),
    ];
});
