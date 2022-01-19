<?php

namespace Database\Factories;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Produk::class;

    public function definition()
    {
        $kategori = Kategori::create([
            'nama_kategori' => 'Seeder kategori 1'
        ]);
        // dd($batch->id);
        return [
            'id_kategori' => $kategori->id,
            'nama_produk' => $this->faker->sentence(),
            'harga' => 50000,
            'stok' => 15
        ];
}
}
