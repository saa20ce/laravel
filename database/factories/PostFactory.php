<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => fake() -> name(),
            "description" => fake() -> name(),
            "preview" => fake() -> name(50),
            "thumbnail" => fake() -> image("public/storage/posts", 640, 520, null, false), 

            //
        ];
    }
}
