<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SlidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Slide::create([
        'title' => 'Welcome to Our Site',
        'description' => 'Discover our amazing products',
        'image_path' => 'images/slide1.jpg',
        'button_text' => 'Get Started',
        'button_link' => '/products',
        'order' => 1,
        'is_active' => true
        ]);

        
    }
}
