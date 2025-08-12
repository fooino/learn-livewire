<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'                     => fake()->realText(rand(3, 10) * 5),
            'content'                   => fake()->realText(500),
            'published'                 => [0, 1][rand(0, 1)],
            'notifications'              => ['email', 'sms', 'firebase'][rand(0, 2)],
        ];
    }
}
