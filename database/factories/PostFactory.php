<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Comment;
use App\Models\Profile;

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
            'title' => $this->faker->realText(30),
            'profile_id' => Profile::all()->random()->id,
            'content' => $this->faker->realText(50),
            //'comment' => Comment::inRandomOrder()->first()->comment,
        ];
    }
}
