<?php
use App\models\Cotisation;
use App\models\Campagne;
use Faker\Generator as Faker;

$factory->define(App\models\Cotisation::class, function (Faker $faker) {
    return [
        'campagne_id' => function(){
            return Campagne::all()->random();
        },
        'identifiant' => $faker->e164PhoneNumber,
        'reference' => $faker->word,
        'source' => $faker->randomElement(['Orange Money', 'Wari', 'Tigo Cash']),
        'messageSource'=> $faker->sentence,
        'montant' => $faker->numberBetween(500,10000),
        'reference'=> $faker->word,
        'date' => $faker->dateTimeThisYear

    ];
});
