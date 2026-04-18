<?php

// app/Database/Factories/ProductFactory.php

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 10, 500),
            // الصورة الرئيسية
            'image' => $this->faker->imageUrl(640, 480, 'abstract', true, 'Faker'),
            // توليد 3 صور مصغرة وهمية
            'thumbnails' => [
                $this->faker->imageUrl(150, 150, 'abstract', true, 'Angle1'),
                $this->faker->imageUrl(150, 150, 'abstract', true, 'Angle2'),
                $this->faker->imageUrl(150, 150, 'abstract', true, 'Angle3'),
            ],
        ];
    }
}
