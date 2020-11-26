<?php

use Illuminate\Database\Seeder;

class OrganizationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Organization::class)->create();
        factory(App\Organization::class)->create();
        factory(App\Organization::class)->create();
        factory(App\Organization::class)->create();
        factory(App\Organization::class)->create();
        factory(App\Organization::class)->create();
        factory(App\Organization::class)->create();
        factory(App\Organization::class)->create();
        factory(App\Organization::class)->create();
        factory(App\Organization::class)->create();

    }
}
