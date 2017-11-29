<?php
use Faker\Generator as Faker;

$factory->define(App\Bets::class, function (Faker $faker) {
    $date = $faker->dateTimeBetween('-1 year', 'now');
    return [
        'total' => $faker->randomFloat(2),
        'roundup' => $faker->randomDigitNotNull(),
        'created_at' => $date,
        'updated_at' => $date,
    ];    
});
