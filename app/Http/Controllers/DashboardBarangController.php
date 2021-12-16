<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.barang.index', [
            'barang' => Barang::where('user_id', auth()->user()->id)->get()
        ]);
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
        $rules = [
            'nama_barang' => 'required|max:255',
            'category_id' => 'required',
            'desc' => 'required',
            'harga' => 'required',
            'socket' => 'nullable',
            'ram_support' => 'nullable',
            'stok' => 'nullable'
        ];

        $validatedData['user_id'] = auth()->user()->id;

        Barang::create($validatedData);

        return redirect('/dashboard/barang')->with('success', 'Data barang berhasil diupdate!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        return view('dashboard.barang.view', [
            'barang' => $barang,
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        return view('dashboard.barang.edit', [
            'barang' => $barang,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        $rules = [
            'nama_barang' => 'required|max:255',
            'category_id' => 'required',
            'desc' => 'required',
            'harga' => 'required',
            'socket' => 'nullable',
            'ram_support' => 'nullable',
            'stok' => 'nullable'

        ];

        $validatedData = $request->validate($rules);

        if($request->slug != $barang->slug) {
            $rules['slug'] = 'required|unique:barangs';
        }

        $validatedData['user_id'] = auth()->user()->id;

        Barang::where('id', $barang->id)->update($validatedData);

        return redirect('/dashboard/barang')->with('success', 'Data barang berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        // if($barang->image) {
        //     Storage::delete($post->image);
        // }

        Barang::destroy($barang->id);

        return redirect('/dashboard/barang')->with('success', 'Barang Berhasil dihapus!');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Barang::class, 'slug', $request->nama_barang);
        return response()->json(['slug' => $slug]);
    }
}
