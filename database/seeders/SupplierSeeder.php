<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['supplier_id' => 1, 'supplier_kode' => 'SP001', 'supplier_nama' => 'Supplier A', 'supplier_alamat' => 'Jl. A No. 1'],
            ['supplier_id' => 2, 'supplier_kode' => 'SP002', 'supplier_nama' => 'Supplier B', 'supplier_alamat' => 'Jl. B No. 2'],
            ['supplier_id' => 3, 'supplier_kode' => 'SP003', 'supplier_nama' => 'Supplier C', 'supplier_alamat' => 'Jl. C No. 3'],
        ];
        DB::table('m_supplier')->insert($data);
    }
}
