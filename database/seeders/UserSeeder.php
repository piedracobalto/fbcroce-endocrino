<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => "admin",
            'email' => "pcg95@hotmail.com",
            'password' => Hash::make('administradordefbendocrinologia'),
        ]);

        User::create([
            'name' => "Florencia",
            'email' => "fbcroce.endocrino@gmail.com",
            'password' => Hash::make('florenciaendocrinologia'),
        ]);

        DB::table("roles")->insert([
            'name' =>"administrator",
            'description' =>"es quien administra el sitio",
            'alias' =>"admin",
        ]);
        DB::table("roles")->insert([
            'name' =>"propietario",
            'description' =>"es propietario el sitio",
            'alias' =>"prop",
        ]);
        DB::table("user_has_roles")->insert([
            'user_id' =>1,
            'role_id' =>1,
        ]);
        DB::table("user_has_roles")->insert([
            'user_id' =>2,
            'role_id' =>2,
        ]);
    }
}
