<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
                'name' => 'admin',
                'email' => 'arbmanx@arbmanx.com',
                'email_verified_at' => now(),
                'password' => bcrypt('tree0420'),
                'remember_token' => Str::random(10),
        ]);
    }
}
