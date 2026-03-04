<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['supplier_id' => 1, 'supplier_kode' => 'SUP001', 'supplier_nama' => 'PT. Elektronik Jaya',  'supplier_alamat' => 'Jl. Sudirman No. 10, Jakarta',    'supplier_telepon' => '021-12345678'],
            ['supplier_id' => 2, 'supplier_kode' => 'SUP002', 'supplier_nama' => 'CV. Sandang Pangan',   'supplier_alamat' => 'Jl. Malioboro No. 5, Yogyakarta',   'supplier_telepon' => '0274-987654'],
            ['supplier_id' => 3, 'supplier_kode' => 'SUP003', 'supplier_nama' => 'UD. Sumber Makmur',    'supplier_alamat' => 'Jl. Ahmad Yani No. 20, Surabaya',   'supplier_telepon' => '031-456789'],
        ];
        DB::table('m_supplier')->insert($data);
    }
}
