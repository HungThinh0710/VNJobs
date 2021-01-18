<?php

use Illuminate\Database\Seeder;

class MajorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('majors')->insert([ 'major_name' => 'IT', 'image_path' => './public/images/major.png' ]);
        DB::table('majors')->insert([ 'major_name' => 'BA', 'image_path' => './public/images/major.png' ]);
        DB::table('majors')->insert([ 'major_name' => 'BrSE', 'image_path' => './public/images/major.png' ]);
        DB::table('majors')->insert([ 'major_name' => 'Sales', 'image_path' => './public/images/major.png' ]);
    }
}
