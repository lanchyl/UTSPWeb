<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PenghuniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('penghuni')->insert([
            [
                'nama' => 'John Doe',
                'no_telp' => '81234567890',
                'status_penepatan' => 'Aktif',
            ],
            [
                'nama' => 'Jane Smith',
                'no_telp' => '82345678901',
                'status_penepatan' => 'Aktif',
            ],
        ]);
    }
}
