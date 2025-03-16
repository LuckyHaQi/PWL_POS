<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        for ($i = 1; $i <= 15; $i++) {
            $data[] = [
                'stok_id' => $i,
                'supplier_id' => rand(1, 3),
                'barang_id' => $i,
                'user_id' => 1, // Misalnya stok dimasukkan oleh admin
                'stok_tanggal' => now(),
                'stok_jumlah' => rand(10, 50),
            ];
        }

        DB::table('t_stok')->insert($data);
    }
}
