<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->insert([
            'id' => 1, // tambahkan baris ini
            'tingkat_kelas' => 'admin',
            'jurusan' => 'admin',
            'nama_kelas' => 'admin',
            'tahun_masuk' => '2023',
            'wali_kelas' => 'Budi',
        ]);
        DB::table('kelas')->insert([
            'id' => 2, // tambahkan baris ini
            'tingkat_kelas' => 'X',
            'jurusan' => 'RPL',
            'nama_kelas' => '1',
            'tahun_masuk' => '2023',
            'wali_kelas' => 'Budi',
        ]);

    }
}
