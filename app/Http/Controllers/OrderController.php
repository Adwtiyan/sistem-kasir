<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::with('produk', 'kategori')->get();
        $bayar = $orders->sum->total_bayar;
        return view('pages.admin.pemesanan')->with([
            'order' => $orders,
            'bayar' => $bayar
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $list1 = Kategori::all();
        $list = Produk::all();
        return view('pages.pemesanan.create')->with([
            'list' => $list,
            'list1' => $list1
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
            'id_produk' => 'required',
            'jumlah' => 'required',
        ]);

        $tanggal = date('Y-m-d');
        $produk = Produk::firstWhere($request->id);
        $total_bayar = $request->jumlah * $request->harga;

        Order::create([
            'id_kategori' => $produk->id_kategori,
            'id_produk' => $request->id_produk,
            'jumlah' => $request->jumlah,
            'tanggal' => $tanggal,
            'total_bayar' => $total_bayar
        ]);

        return redirect()->route('admins.pemesanan-produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($order)
    {
        $order = Order::firstWhere('id', $order);
        return view('pages.pemesanan.edit')->with([
            'order' => $order
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $order)
    {
        $request->validate([
            'jumlah' => 'required'
        ]);
        $bayaran = $request->jumlah * $request->harga;
        Order::with('Produk')->where('id', $order)->update([
        'jumlah' => $request->jumlah,
        'total_bayar' => $bayaran
        ]);

        return redirect()->route('admins.pemesanan-produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($order)
    {
        Order::destroy($order);

        return redirect()->route('admins.pemesanan-produk');
    }
}
