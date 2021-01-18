<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(\App\RecruitmentNews::class, function (Faker $faker) {
    $faker = \Faker\Factory::create('vi_VN'); // create a VietNam faker
    $types = ['Fulltime', 'Part-time', 'Remote'];
    $titles = ['ReactJS', 'NodeJS', '.Net', 'Java', 'Ruby'];
    return [
        'org_id' => rand(1, 10),
        'author_id' => rand(1, 10),
        'major_id' => rand(1, 4),
        'title' => $types[rand(0, 2)].' '.$titles[rand(0, 4)],
        'content' => 'Cần tuyển '.$faker->text,
        'address' => $faker->address,
        'city' => $faker->city,
        'work_type' => $types[rand(0, 2)],
        'start_time' => now(),
        'end_time' => now()->addDay(5),
        'interview_start_time' => now()->addDay(6),
        'interview_end_time' => now()->addDay(10),
    ];
});
