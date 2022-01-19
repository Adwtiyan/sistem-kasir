<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = produk::with('kategori')->get();
        return view('pages.admin.produk')->with([
            'produk' => $produk
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('pages.product.create')->with([
            'kategoris' => $kategori
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'id_kategori' => 'required',
            'harga' => 'required',
            'stok' => 'required'
        ]);

        produk::create([
            'nama_produk' => $request->nama_produk,
            'id_kategori' => $request->id_kategori,
            'harga' => $request->harga,
            'stok' => $request->stok
        ]);

        return redirect()->route('admins.show-produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($produk)
    {
        $kategori = Kategori::all();
        $produk = produk::firstWhere('id', $produk);
        return view('pages.product.edit')->with([
            'produks' => $produk,
            'kategoris' => $kategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $produk)
    {
        $request->validate([
            'id_kategori' => 'required',
            'nama_produk' => 'required',
            'harga' => 'required',
            'stok' => 'required'
        ]);
        produk::where('id', $produk)->update([
            'id_kategori' => $request->id_kategori,
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok
        ]);

        return redirect()->route('admins.show-produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($produk)
    {
        produk::destroy($produk);

        return redirect()->route('admins.show-produk');
    }
}
