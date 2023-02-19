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
    public function definition()
    {
        return [
            //
            'product' => $this->faker->word(),
            'price' => $this->faker->numberBetween(100,1000),
            'description' => $this->faker->sentence(),
            'image' => $this->faker->image('public/storage/images',100,100),
            // 'image' => $this->faker->image(storage_path(path:'public/storage/images'), width:400, height:400, category:null, fullPath:false ),

            'category_id' => $this->faker->numberBetween(1,5),

            'section_id' => $this->faker->numberBetween(1,5),
            'featured' => $this->faker->randomElement(['1','0']),
            'popular' => $this->faker->randomElement(['1','0']),
            'prescribed' => $this->faker->randomElement(['1','0']),
        ];
    }
}
