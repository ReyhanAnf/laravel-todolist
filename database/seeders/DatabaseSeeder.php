<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $reyhan = User::create([
            'name' => 'Reyhan Andrea Firdaus',
            'username' => 'reyhananf',
            'email' => 'reyn@gmail.com',
            'password' => Hash::make('password')
        ]);

        Todo::factory(100)->recycle([
            User::factory(5)->create(),
            $reyhan,
        ])->create();
    }
}
