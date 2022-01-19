<?php

namespace Database\Factories;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

class KategoriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Kategori::class;

    public function definition()
    {
        return [
            'nama_kategori' => $this->faker->sentence()
        ];
    }
}
