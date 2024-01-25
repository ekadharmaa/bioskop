<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username'=>'admin',
            'name'=> 'admin',
            'password'=>bcrypt('admin'),
            'birthdate'=>'2003-01-11',
            'balance'=>500000,
        ]);
    }
}
