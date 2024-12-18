<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        // Create a Dummy super Admin
        Admin::create([
            'name'=>'Super Admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('secret'),
            'role'=>'superadmin',
        ]);

        // Create 5 random admin users
        foreach(range(1, 5) as $index){
            Admin::create([
                'name'=>$faker->name,
                'email'=>$faker->unique()->safeEmail(),
                'password'=>Hash::make('password'),
                'role' => $faker->randomElement(['superadmin', 'admin']), // Random role for the user
            ]);
        }   
    }
}
