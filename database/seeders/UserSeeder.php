<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrator',
            'username' => 'admin',  
            'password' => Hash::make('password'),
            'role_id' => 1,
            'kelas_id' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'Ketua Kelas',
            'username' => 'ketuakelas',  
            'password' => Hash::make('password'),
            'role_id' => 2,
            'kelas_id' => 2,
        ]);
    }
}
