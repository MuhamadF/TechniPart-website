<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Barang;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // buat ID admin
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345'),
            'is_admin' => true
        ]);

        // buat ID non-admin
        User::create([
            'name' => 'User Reguler',
            'username' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt('12345'),
            'is_admin' => false
        ]);

        // buat category
        Category::create([
            'nama' => 'Processor',
            'slug' => 'processor'
        ]);

        Category::create([
            'nama' => 'Motherboard',
            'slug' => 'motherboard'
        ]);

        //buat barang
        Barang::create([
            'nama_barang' => 'Intel i5-4590',
            'slug' => 'intel-i5-4590',
            'desc' => 'Boost clock 3.33 Ghz',
            'harga' => '850000',
            'socket' => 'LGA1151',
            'ram_support' => 'DDR3-1600',
            'category_id' => 1,
            'stok' => 50,
            'user_id' => 1
        ]);

        Barang::create([
            'nama_barang' => 'Gigabyte H81',
            'slug' => 'gigabyte-h81',
            'desc' => 'DDR3 Support',
            'harga' => '450000',
            'socket' => 'LGA1151',
            'ram_support' => 'DDR3-1600',
            'category_id' => 2,
            'stok' => 50,
            'user_id' => 1
        ]);
    }
}
