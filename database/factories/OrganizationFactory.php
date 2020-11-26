<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Organization::class, function (Faker $faker) {
    $faker = \Faker\Factory::create('vi_VN'); // create a VietNam faker

    return [
        'owner_id' => rand(1,10),
        'org_name' => 'Công ty '.$faker->company,
        'phones' => $faker->phoneNumber,
        'tax_id' => rand(1,10000).rand(1,10),
        'address' => $faker->address,
        'is_verify' => rand(0,1),
    ];
});
