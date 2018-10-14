<?php

use Faker\Generator as Faker;
use App\models\Campagne;

$factory->define(App\models\Campagne::class, function (Faker $faker) {
    return [
        'titre' => $faker->word,
        'shortDescription' => $faker->sentence,
        'longDescription' => $faker->paragraph,
        'type'=> $faker->numberBetween(1,3),
        'dateDebut' => $faker->dateTimeThisYear,
        'dateFin' => $faker->dateTimeThisYear
    ];
});
