<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Payment;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {
    return [
        'checkNumber' => $faker->word . $faker->randomNumber(),
        'paymentDate' => $faker->date,
        'amount' => $faker->randomNumber(2),
    ];
});
