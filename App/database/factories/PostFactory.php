<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween(1, 3),
            'user_id' => $this->faker->numberBetween(1, 5),
            'author_id' => $this->faker->numberBetween(1, 5),
            'title' => $this->faker->title,
            'excerpt' => $this->faker->title,
            'body' => $this->faker->text(200)
        ];
    }
}
