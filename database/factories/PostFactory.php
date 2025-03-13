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
        $title = fake()->realText(rand(10, 40)); 
        //если заголовок больше 30 символов то мы обрезаем его и в конце ставим ... 
        $short_title = mb_strlen($title) > 30 ? mb_substr($title, 0, 30) . '...' : $title; 
        //наш пост создастся рандомно с датой от -30 днейй назад до -1 
        $created = fake()->dateTimeBetween('-30 days', '-1 days'); 
 
        return [
            'title' => $title, 
            'short_title' => $short_title, 
            'author_id' => rand(1, 4), //создаст рандомное кол-во пользователей 
            'descr' => fake()->realText(rand(100, 500)), 
            'created_at' => $created, 
            'updated_at' => $created
        ];
    }
}
