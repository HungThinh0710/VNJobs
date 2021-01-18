<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Major::class, function (Faker $faker) {
    $faker = \Faker\Factory::create('vi_VN'); // create a VietNam faker
    return [
        'major_name' => $faker->major,
        'image_path' => './public/images/major.png'
    ];
});
