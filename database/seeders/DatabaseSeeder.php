<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       User:: create([
        'name'=> 'MARAYO',
        'email' => 'rucienmarayo11@gmail.com',
        'password' => 'password',
       ]);
    }
}
