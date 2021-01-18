<?php

use Illuminate\Database\Seeder;

class RecruitmentNewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 45; $i++) { 
            factory(App\RecruitmentNews::class)->create();
        }
    }
}
