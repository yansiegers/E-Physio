<?php

namespace Database\Factories;

use App\Models\Physician;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhysicianFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Physician::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'expertise' => 'knee',
        ];
    }
}
