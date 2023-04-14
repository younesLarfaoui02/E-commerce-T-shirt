<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@laravelia.com',
                'is_admin'=>'1',
               'password'=> bcrypt('secret'),
            ],
            [
               'name'=>'User',
               'email'=>'user@laravelia.com',
                'is_admin'=>'0',
               'password'=> bcrypt('secret'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
