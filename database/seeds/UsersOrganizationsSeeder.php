<?php

use Illuminate\Database\Seeder;

class  UsersOrganizationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_organization')->insert([ 'org_id' => rand(1,10), 'user_id' => rand(1,10)]);
        DB::table('user_organization')->insert([ 'org_id' => rand(1,10), 'user_id' => rand(1,10)]);
        DB::table('user_organization')->insert([ 'org_id' => rand(1,10), 'user_id' => rand(1,10)]);
        DB::table('user_organization')->insert([ 'org_id' => rand(1,10), 'user_id' => rand(1,10)]);
        DB::table('user_organization')->insert([ 'org_id' => rand(1,10), 'user_id' => rand(1,10)]);
        DB::table('user_organization')->insert([ 'org_id' => rand(1,10), 'user_id' => rand(1,10)]);
        DB::table('user_organization')->insert([ 'org_id' => rand(1,10), 'user_id' => rand(1,10)]);
        DB::table('user_organization')->insert([ 'org_id' => rand(1,10), 'user_id' => rand(1,10)]);
        DB::table('user_organization')->insert([ 'org_id' => rand(1,10), 'user_id' => rand(1,10)]);
        DB::table('user_organization')->insert([ 'org_id' => rand(1,10), 'user_id' => rand(1,10)]);
    }
}
