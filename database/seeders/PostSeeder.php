<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{

    public function run()
    {
        Post::factory(30)
            ->has(Category::factory()->count(3))
            ->create();
    }
}
