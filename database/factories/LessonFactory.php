<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->word;
        return [
            'name'=>$name,
            'slug'=>strtoupper(Str::slug($name,'_')),
            'credit'=>$this->faker->numberBetween(1,5),
            'teacher_id'=>Teacher::inRandomOrder()->first()->id
        ];
    }
}
