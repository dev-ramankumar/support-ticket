<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        for ($i=0;$i< 101;$i++) {
            DB::table('users')->insert([
                'first_name' => Str::random(10),
                'last_name' => Str::random(10),
                'username' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'remember_token' => Str::random(100),
                'email_verified' => rand(0, 1),
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // password
                'remember_token' => Str::random(10),
                'activation_token' => Str::random(100),
                'mobile' => '9625788629',
                'image' => 'avatar.jpg',
                'status' => 1,
                'created_by' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }

}
