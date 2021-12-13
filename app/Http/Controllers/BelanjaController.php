<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Barang;

class BelanjaController extends Controller
{
    public function Index() {

        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' di kategori ' . $category->nama;
        }

        if(request('search')) {
            $title = ' di pencarian ' . request('search');
        }
        return view('home', [
                'title' => 'Semua Produk' . $title,
                'active' => 'belanja',
                'barang' => Barang::latest()->filter(request(['search', 'category']))->get(),
                'category' => Category::All()
        ]);
    }

    public function show(Barang $barang) {
        return view('detail', [
            'nama_barang' => 'Barang',
            'active' => 'Belanja',
            'barang' => $barang,
            'category' => Category::All()
        ]);
    }
}
