<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('users')->insert([
        'name' => 'Shibaji Debnath',
        'email' => 'imshibaji@gmail.com',
        'email_varified' => true,
        'password' => bcrypt('123456'),
        'role' => 'admin',
        'mobile' => '8981009499',
        'mobile_varified' => true,
        'remember_token' => str_random(10),
        'visitor' => '127.0.0.1',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
      ]);

      DB::table('users')->insert([
        'name' => 'Pradip Debnath',
        'email' => 'itzpradip@gmail.com',
        'email_varified' => true,
        'password' => bcrypt('123456'),
        'role' => 'manager',
        'status' => 'inactive',
        'mobile' => '8981009500',
        'mobile_varified' => true,
        'remember_token' => str_random(10),
        'visitor' => '127.0.0.1',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
      ]);

      DB::table('users')->insert([
        'name' => 'Suman Debnath',
        'email' => 'imsuman@gmail.com',
        'email_varified' => true,
        'password' => bcrypt('123456'),
        'role' => 'user',
        'mobile' => '7897654346',
        'mobile_varified' => true,
        'remember_token' => str_random(10),
        'visitor' => '127.0.0.1',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
      ]);
    }
}
