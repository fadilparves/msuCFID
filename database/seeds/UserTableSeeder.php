<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
        	'staffID' => '01201509087',
        	'email'   => 'tester@test.com',
        	'password'=> bcrypt('tester'),
        ]);
    }
}
