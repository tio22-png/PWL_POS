<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['penjualan_id' => 1,  'user_id' => 3, 'penjualan_kode' => 'PJL-2026-001', 'penjualan_tanggal' => '2026-02-01', 'total_harga' => 2584000],
            ['penjualan_id' => 2,  'user_id' => 3, 'penjualan_kode' => 'PJL-2026-002', 'penjualan_tanggal' => '2026-02-03', 'total_harga' => 312000],
            ['penjualan_id' => 3,  'user_id' => 3, 'penjualan_kode' => 'PJL-2026-003', 'penjualan_tanggal' => '2026-02-05', 'total_harga' => 455000],
            ['penjualan_id' => 4,  'user_id' => 3, 'penjualan_kode' => 'PJL-2026-004', 'penjualan_tanggal' => '2026-02-07', 'total_harga' => 8080000],
            ['penjualan_id' => 5,  'user_id' => 3, 'penjualan_kode' => 'PJL-2026-005', 'penjualan_tanggal' => '2026-02-10', 'total_harga' => 620000],
            ['penjualan_id' => 6,  'user_id' => 3, 'penjualan_kode' => 'PJL-2026-006', 'penjualan_tanggal' => '2026-02-12', 'total_harga' => 97000],
            ['penjualan_id' => 7,  'user_id' => 3, 'penjualan_kode' => 'PJL-2026-007', 'penjualan_tanggal' => '2026-02-14', 'total_harga' => 255000],
            ['penjualan_id' => 8,  'user_id' => 3, 'penjualan_kode' => 'PJL-2026-008', 'penjualan_tanggal' => '2026-02-17', 'total_harga' => 486000],
            ['penjualan_id' => 9,  'user_id' => 3, 'penjualan_kode' => 'PJL-2026-009', 'penjualan_tanggal' => '2026-02-20', 'total_harga' => 34000],
            ['penjualan_id' => 10, 'user_id' => 3, 'penjualan_kode' => 'PJL-2026-010', 'penjualan_tanggal' => '2026-02-25', 'total_harga' => 310000],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
