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
            'image_url' => '/images/covers/travel.jpg',
            'icon_url' => '/images/icons/travel.png',
        ]);

        Category::query()->create([
            'name' => 'Education',
            'image_url' => '/images/covers/education.jpg',
            'icon_url' => '/images/icons/education.png',
        ]);

        Category::query()->create([
            'name' => 'Health',
            'image_url' => '/images/covers/health.jpg',
            'icon_url' => '/images/icons/health.png',
        ]);

        Category::query()->create([
            'name' => 'Technology',
            'image_url' => '/images/covers/technology.jpg',
            'icon_url' => '/images/icons/technology.png',
        ]);

        Category::query()->create([
            'name' => 'Business',
            'image_url' => '/images/covers/business.jpg',
            'icon_url' => '/images/icons/business.png',
        ]);

        Category::query()->create([
            'name' => 'Music',
                'image_url' => '/images/covers/music.jpg',
            'icon_url' => '/images/icons/music.png',
        ]);

        Category::query()->create([
            'name' => 'Sports',
            'image_url' => '/images/covers/sports.jpg',
            'icon_url' => '/images/icons/sports.png',
        ]);

        Category::query()->create([
            'name' => 'Food',
            'image_url' => '/images/covers/food.jpg',
            'icon_url' => '/images/icons/food.png',
        ]);

        Category::query()->create([
            'name' => 'Art',
            'image_url' => '/images/covers/art.jpg',
            'icon_url' => '/images/icons/art.png',
        ]);
    }
}
