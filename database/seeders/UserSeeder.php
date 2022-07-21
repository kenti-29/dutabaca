<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
             ['name' => 'Admin', 'username' => 'admin', 'password' => Hash::make('123'), 'no_hp' => '083721345678', 'instansi' => 'Polindra', 'role' => 'ADMIN', 'tgl_lahir' => '2001-04-29', 'jenis_kelamin' => 'Perempuan'],
             ['name' => 'Kepaladinas', 'username' => 'Kepaladinas',  'password' => Hash::make('123'), 'no_hp' => '083721345678', 'instansi' => 'Polindra', 'role' => 'KEPALADINAS',  'tgl_lahir' => '2001-04-29', 'jenis_kelamin' => 'Laki-laki'],
             ['name' => 'Juri', 'username' => 'juri', 'password' => Hash::make('123'), 'no_hp' => '083721345678', 'instansi' => 'Polindra', 'role' => 'JURI',  'tgl_lahir' => '2001-04-29', 'jenis_kelamin' => 'Perempuan'],
            //  ['name' => 'Peserta', 'username' => 'peserta', 'password' => Hash::make('123'), 'no_hp' => '083721345678', 'instansi' => 'Polindra', 'role' => 'PESERTA',  'tgl_lahir' => '2001-04-29', 'jenis_kelamin' => 'Perempuan'],
        ]);
    }
}
