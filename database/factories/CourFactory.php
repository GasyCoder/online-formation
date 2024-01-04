<?php

namespace Database\Factories;

use App\Models\Cour;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cour>
 */
class CourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre' => $this->faker->sentence,
            'sub_title' => $this->faker->sentence,
            'uuid' => $this->faker->uuid,
            'slug' => $this->faker->slug,
            'formateur_id' => User::factory()->create()->id,
            'categorie_id' => Category::factory()->create()->id,
            'description' => $this->faker->paragraph,
            'contenu' => $this->faker->text,
            'niveau' => $this->faker->word,
            'duree' => $this->faker->numberBetween(1, 100),
            'prix' => $this->faker->randomFloat(2, 10, 1000),
            'image_cours' => $this->faker->imageUrl(),
            'video_intro' => $this->faker->url,
            'date_start' => $this->faker->dateTimeBetween('-1 month', '+1 month')->format('Y-m-d H:i:s'),
            'date_end' => $this->faker->dateTimeBetween('+1 month', '+3 months')->format('Y-m-d H:i:s'),
        ];
    }
}
