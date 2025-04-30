<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Gonovski',
            'email' => 'gonovski@gmail.com',
            'password' => Hash::make('gonovski123'),
            'email_verified_at' => Carbon::now(),
        ]);
    }
}
