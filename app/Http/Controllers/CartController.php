<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Barang;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'barang_id' => 'required'
        ]);

        $produk = Barang::findOrFail($request->barang_id);

        //cek produk udah ada didalem keranjang
        $checkkeranjang = Cart::where('barang_id', $request->barang_id)->first();

        if($checkkeranjang) {
            return redirect('detail/' . $produk->slug)->with('fail', 'Dikarenakan Kelangkaan Komponen, maka pembeli tidak bisa membeli barang lebih dari 1 buah.');
        } else {
            $validatedData['user_id'] = auth()->user()->id;
            $validatedData['name'] = $request->user()->name;
            $validatedData['nama_produk'] = $produk->nama_barang;
            $validatedData['jumlah'] = 1;
            $validatedData['subtotal'] = $produk->harga;

            Cart::create($validatedData);
            return redirect('detail/' . $produk->slug)->with('success', 'Barang telah ditambah!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
