<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


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
            'password' => bcrypt('12345')
        ]);
    }
}
