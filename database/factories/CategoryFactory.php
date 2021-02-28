<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{

    protected $model = Category::class;

     /* já passa o true como paraametro */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'slug' => $this->faker->slug,
            'active' => true
        ];
    }
}
