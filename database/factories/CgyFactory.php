<?php

namespace Database\Factories;

use App\Models\Cgy;
use Illuminate\Database\Eloquent\Factories\Factory;

class CgyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cgy::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText(15),
            'desc' => $this->faker->realText(),
            'enabled' => 1
        ];
    }
}
