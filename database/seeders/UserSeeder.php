<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Usamos la fábrica de esta manera
        User::factory(10)->create(); // Correcto para Laravel 10
    }
}
