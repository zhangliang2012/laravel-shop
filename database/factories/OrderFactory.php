<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;
use Psy\Util\Str;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'goods_id' => $this->faker->numberBetween(0, 100),
            'user_id' => $this->faker->numberBetween(0, 100),
            'mark' => $this->faker->text(100),
//            'created_at' => $this->faker->date("Y-m-d H:i:s", 'now'),
//            'updated_at' => $this->faker->date("Y-m-d H:i:s", 'now'),
        ];
    }
}
