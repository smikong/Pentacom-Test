<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Todo>
 */
class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
//        B megoldás
//        $randomUserId = User::pluck('id')->random();

        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
//            B megoldás
//            'user_id' => $randomUserId
        ];
    }
}
