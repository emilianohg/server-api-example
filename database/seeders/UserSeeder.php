<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::factory()
            ->count(50)
            ->sequence(fn ($sequence) => ['email' => 'correo'.($sequence->index + 1).'@example.com'])
            ->create();
    }
}
