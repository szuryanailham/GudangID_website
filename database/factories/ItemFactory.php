<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   $deskripsi = $this->faker->paragraphs(5, true);
        return [
            'id_barang' =>$this->faker->regexify('[A-Z]{5}[0-4]'),
            'nama_barang' =>$this->faker->word,
            'Deskripsi' =>$deskripsi,
            'category_id' =>$this->faker->numberBetween(1,3),
            'harga'=>$this->faker->numberBetween(1000,1000000),
            'stok' =>$this->faker->numberBetween(0,100)
        ];
    }
}
