<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('petugas')->insert([
            'nama_petugas' => 'Admin',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'telp' => '082882828',
            'level' => 'admin'
        ]);
        DB::table('petugas')->insert([
            'nama_petugas' => 'Petugas',
            'username' => 'petugas',
            'password' => Hash::make('petugas'),
            'telp' => '082882828',
            'level' => 'petugas'
        ]);
        DB::table('masyarakat')->insert([
            'nik' => '023234323',
            'nama' => 'Nur',
            'username' => 'qwen164',
            'password' => Hash::make('qwen164'),
            'telp' => '08121311226',
        ]);
    }
}
