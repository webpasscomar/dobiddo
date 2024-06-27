<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contrasenaHasheada = bcrypt('admin*2024');

        $user = new User();
        $user->id = 1;
        $user->name = 'admin';
        $user->email = 'admin@dobiddo.com';
        $user->password = $contrasenaHasheada;
        $user->email_verified_at = now();
        $user->save();
    }
}
