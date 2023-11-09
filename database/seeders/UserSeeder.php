<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //User::factory(5)->create();
        User::create([
                'name' => 'Yvanie Noelle',
                'email' => 'yva@example.com',
                'email_verified_at' => '2023-11-09 15:15:29',
                'password'=>bcrypt('12345')
             ]);
             User::create([
                'name' => 'Jean Claude',
                'email' => 'jean@example.com',
                'email_verified_at' => '2023-11-09 15:15:29',
                'password'=>bcrypt('6789')
             ]);
             User::create([
                'name' => 'Vad',
                'email' => 'vad@example.com',
                'email_verified_at' => '2023-11-09 15:15:29',
                'password'=>bcrypt('74532')
             ]);



    }
}
