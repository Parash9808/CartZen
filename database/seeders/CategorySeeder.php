<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $electronics =Category::create([
            'name' => 'Electronics',
            'slug' => 'electronics',
            'image'=> 'categories/electronics.jpg',
        ]);
        $fashion =Category::create([
            'name' => 'Fashion',
            'slug' => 'fashion',
            'image'=> 'categories/fashion.jpg',
        ]);
        $homeandliving =Category::create([
            'name' => 'Home & Living',
            'slug' => 'home&living',
            'image'=> 'categories/home&living.jpg',
        ]);
        $babytoy =Category::create([
            'name' => 'Baby & Toys',
            'slug' => 'baby&toys',
            'image'=> 'categories/baby&toys.jpg',
        ]);
        $sports =Category::create([
            'name' => 'Sports',
            'slug' => 'sports',
            'image'=> 'categories/sports.jpg',
        ]);
        $health =Category::create([
            'name' => 'Health',
            'slug' => 'health',
            'image'=> 'categories/health.jpg',
        ]);
        $automotive =Category::create([
            'name' => 'Automotive',
            'slug' => 'automotive',
            'image'=> 'categories/automotive.jpg',
        ]);
        $books =Category::create([
            'name' => 'Books',
            'slug' => 'books',
            'image'=> 'categories/books.jpg',
        ]);
    }
}
