<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Amin Valizade',
                'email' => 'aminvalizade03@gmail.com',
                'password' => Hash::make("22446688"),
            ],
            [
                'name' => 'Travis Scott',
                'email' => 'travis@gmail.com',
                'password' => Hash::make("22446688"),
            ],
            [
                'name' => 'Aubry Graham',
                'email' => 'aubry@gmail.com',
                'password' => Hash::make("22446688"),
            ]];
        User::insert($users);
    }
}
