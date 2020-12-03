<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/


$factory->define(User::class, function (Faker $faker) {
    $faker = \Faker\Factory::create('vi_VN'); // create a VietNam faker

    return [
        'role_id' => rand(1,4),
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'dob' => $faker->dateTime($max = 'now', $timezone = null),
        'phone' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => Hash::make("123123"), // password 123123
        'address' => $faker->address,
        'bio' => Str::random(30),
        'remember_token' => Str::random(10),
    ];
});
