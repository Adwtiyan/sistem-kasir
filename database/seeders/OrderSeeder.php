<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\Order;
use App\Models\Produk;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = Kategori::factory(1)->create();
        $produk = new Produk;
        $produk->id_kategori = $kategori[0]->id;
        $produk->nama_produk = 'Seeder kategori produk';
        $produk->harga = 10000;
        $produk->stok = 10;
        $produk->save();

        $kategoris = new Kategori;
        $kategoris->nama_kategori = 'Seeder Kategori';
        $kategoris->save();

        $order = new Order;
        $order->id_produk = $produk->id;
        $order->id_kategori = $kategoris->id;
        $order->jumlah = 10;
        $order->total_bayar = 50000;
        $order->tanggal = '6-1-22';
        $order->save();
    }
}
