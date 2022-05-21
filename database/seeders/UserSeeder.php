<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::factory()->create([
            'name' => 'Emiliano',
            'email' => 'emiliano@example.com',
        ]);

        for ($i = 1; $i <= 50; $i++) {
            User::factory()->create([
                'email' => 'correo'.$i.'@example.com',
            ]);
        }
    }
}
