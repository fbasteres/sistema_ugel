<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      User::create([
        'name'=> 'Fernando',
        'last_name' => 'Ramirez Basteres',
        'dni' => '76006459',
        'username' => 'admin',
        'email' => 'admin@agptarma.com',
        'password' => bcrypt('Tarma2021'),
      ]);
    }
}
