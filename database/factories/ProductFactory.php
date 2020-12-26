<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $attr = [
            'attr1' => $this->faker->text(20),
            'attr2' => $this->faker->text(30),
        ];
        return [
            'title' => $this->faker->sentence(5, true),
            'category_id' => $this->faker->numberBetween(0, 1000000),
            'is_on_sale' => $this->faker->numberBetween(0, 1),
            'pic_url' => $this->faker->image('./images', 320, 320, 'cats', false),
            'price' => $this->faker->randomNumber(5, true),
            'attr' => $attr,
        ];
    }
}
