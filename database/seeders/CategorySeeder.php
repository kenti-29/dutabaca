<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Category')->insert([
            [ 'name' => 'Umum', 'type' => 'umum'],
            ['name' => 'Pendaftaran', 'type' => 'pendaftaran'],
        ]);
    }
}
