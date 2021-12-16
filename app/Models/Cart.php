<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function barang() {
        return $this->hasMany(Barang::class);
    }

    public function UpdateDetail($barang, $jumlah, $harga) {
        $this->attributes['jumlah'] = $barang->jumlah + $jumlah;
        $this->attributes['harga'] = $barang->harga;
        self::save();
    }

    public function UpdateTotal($barang, $harga) {
        $this->attributes['harga'] = $barang->harga + $harga;
        $this->attributes['total'] = $barang->total + $harga;
        self::save();
    }
}
