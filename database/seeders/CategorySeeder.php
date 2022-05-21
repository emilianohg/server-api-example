<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::query()->create([
            'name' => 'Politics',
            'image_url' => '/images/covers/politics.jpg',
            'icon_url' => '/images/icons/politics.png',
        ]);

        Category::query()->create([
            'name' => 'Travel',
            'image_url' => '/images/covers/politics.jpg',
            'icon_url' => '/images/icons/politics.png',
        ]);

        Category::query()->create([
            'name' => 'Education',
            'image_url' => '/images/covers/politics.jpg',
            'icon_url' => '/images/icons/politics.png',
        ]);

        Category::query()->create([
            'name' => 'Health',
            'image_url' => '/images/covers/politics.jpg',
            'icon_url' => '/images/icons/politics.png',
        ]);

        Category::query()->create([
            'name' => 'Technology',
            'image_url' => '/images/covers/politics.jpg',
            'icon_url' => '/images/icons/politics.png',
        ]);

        Category::query()->create([
            'name' => 'Business',
            'image_url' => '/images/covers/politics.jpg',
            'icon_url' => '/images/icons/politics.png',
        ]);

        Category::query()->create([
            'name' => 'Music',
            'image_url' => '/images/covers/politics.jpg',
            'icon_url' => '/images/icons/politics.png',
        ]);

        Category::query()->create([
            'name' => 'Sports',
            'image_url' => '/images/covers/politics.jpg',
            'icon_url' => '/images/icons/politics.png',
        ]);

        Category::query()->create([
            'name' => 'Food',
            'image_url' => '/images/covers/politics.jpg',
            'icon_url' => '/images/icons/politics.png',
        ]);

        Category::query()->create([
            'name' => 'Art',
            'image_url' => '/images/covers/politics.jpg',
            'icon_url' => '/images/icons/politics.png',
        ]);
    }
}
