<?php

namespace Database\Factories;

use App\Models\Meeting;
use App\Models\Physician;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class MeetingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Meeting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'user_id' => User::factory(),
            'physician_id' => Physician::factory(),
            'type' => 'interview',
            'start_date_time' => $this->faker->dateTimeThisMonth(),
            'duration' => 60,
        ];
    }
}
