<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Riska Amelia',
            'username' => 'riskaa15',
            'email' => 'riska@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

    }
}
