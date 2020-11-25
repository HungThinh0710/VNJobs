<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([ 'role_name' => 'Founder' ]);
        DB::table('roles')->insert([ 'role_name' => 'Administrator' ]);
        DB::table('roles')->insert([ 'role_name' => 'HR' ]);
        DB::table('roles')->insert([ 'role_name' => 'Member' ]);
    }
}
