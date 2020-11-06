<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pNum' => $faker->randomInteger(),
            'firstName' => $faker->firstName(),
            'surname' => $faker->surname(),
            'age' => $faker->numberBetween(0,100),
            'favouriteTeam' => $faker->randomElement(['Lakers','Warrios','Celtics',
            'Heat','Raptors','Rockets','Bulls', 'Clippers', '76ers', 'Knicks', 'Bucks',
            'Mavericks', 'Spurs', 'Thunder', 'Nets', 'Suns', 'Blazers', 'Nuggets', 'Cavs',
            'Jazz', 'Pelicans', 'Wolves', 'Pacers', 'Magic', 'Kings', 'Pistons']),
            'email',
        ];
    }
}
