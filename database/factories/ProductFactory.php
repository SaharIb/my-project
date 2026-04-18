<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
public function definition(): array
{
    return [
        'name' => $this->faker->words(3, true), // اسم وهمي من 3 كلمات
        'slug' => $this->faker->slug,
        'description' => $this->faker->paragraph,
        'price' => $this->faker->randomFloat(2, 10, 500), // سعر بين 10 و 500
        'image' => 'https://picsum.photos/400/400', // صورة عشوائية من الإنترنت
        'stock' => $this->faker->numberBetween(1, 50),
        'is_available' => $this->faker->boolean(80), // 80% من المنتجات متاحة
        'wrapping_options' => $this->faker->sentence(5), // ملاحظات عن التغليف
    ];
}
}
