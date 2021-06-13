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
        //MUST Change digit validate_between in App\Http\Requests\Organization\AddMember
        DB::table('roles')->insert([ 'role_name' => 'Founder' ]);
        DB::table('roles')->insert([ 'role_name' => 'HR' ]);
        DB::table('roles')->insert([ 'role_name' => 'ContentWriter' ]);
//        DB::table('roles')->insert([ 'role_name' => 's' ]);
    }
}
