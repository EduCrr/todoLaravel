<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\User;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user =  User::all()->random();

        while(count($user->categories) === 0){
            $user = User::all()->random();
        }

        return [
            
            'title' => $this->faker->text(30),
            'is_done' => $this->faker->boolean(),
            'description' => $this->faker->text(60),
            'due_date' => $this->faker->dateTime(),
            'user_id' => $user,
            'category_id' => $user->categories->random(),
        ];
    }
}
