<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        
        for($i = 1; $i <= 50; $i++){
            DB::table('users')->insert([
                'username' => $faker->name,
                'password' => Hash::make('admin'),
            ]);
        }
    }
}
