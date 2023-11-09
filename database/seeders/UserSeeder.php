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
        User::factory()->create([
                'name' => 'Yvanie Noelle',
                'email' => 'yva@example.com',
                'email_verified_at' => '2023-11-09 15:15:29',
                'password'=>'$2y$12$nkxoEFD/0X53muTHl4TLuO1F2cTnNPHHoeJlgdiLOnHrmahKH32Pm'
             ]);
             User::factory()->create([
                'name' => 'Jean Claude',
                'email' => 'jean@example.com',
                'email_verified_at' => '2023-11-09 15:15:29',
                'password'=>'$2y$12$nkxoEFD/0X53muTHl4TLuO1F2cTnNPHHoeJlgdiLOnHrmahKH32Pm'
             ]);
             User::factory()->create([
                'name' => 'Vad',
                'email' => 'vad@example.com',
                'email_verified_at' => '2023-11-09 15:15:29',
                'password'=>'$2y$12$nkxoEFD/0X53muTHl4TLuO1F2cTnNPHHoeJlgdiLOnHrmahKH32Pm'
             ]);



    }
}
