<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = \App\Models\Task::class;

    public function definition()
    {
        return [
            'user_id' => rand(1, 100),
            'title' => $this->faker->title,
            'body' => $this->faker->paragraph,
            'created_at' => now()
        ];
    }
}
