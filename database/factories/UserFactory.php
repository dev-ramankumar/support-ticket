<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstNameMale,
        'last_name' => $faker->lastName,
        'username' => $faker->unique()->userName,
        'email' => $faker->unique()->safeEmail,
        'remember_token' => Str::random(100),
        'email_verified' => rand(0, 1),
        'email_verified_at' => now(),
        'password' => bcrypr('password'), // password
        'remember_token' => Str::random(10),
        'activation_token' => Str::random(100),
        'mobile' => '9625788629',
        'image' => 'avatar.jpg',
        'status' => 1,
        'created_by' => 1,
        'created_at' => now(),
        'updated_at' => now()
    ];
});
