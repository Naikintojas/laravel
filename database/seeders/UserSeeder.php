<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Eividas',
            'email' => 'test@test.com',
            'password' => bcrypt('password'),
        ]);
    }
}
