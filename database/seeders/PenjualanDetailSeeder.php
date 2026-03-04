<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // Transaksi 1
            ['detail_id' => 1,  'penjualan_id' => 1,  'barang_id' => 1,  'jumlah' => 1, 'harga' => 2500000, 'diskon' => 0],
            ['detail_id' => 2,  'penjualan_id' => 1,  'barang_id' => 3,  'jumlah' => 2, 'harga' => 80000,   'diskon' => 0],
            ['detail_id' => 3,  'penjualan_id' => 1,  'barang_id' => 10, 'jumlah' => 1, 'harga' => 5000,    'diskon' => 0],
            // Transaksi 2
            ['detail_id' => 4,  'penjualan_id' => 2,  'barang_id' => 4,  'jumlah' => 3, 'harga' => 55000,   'diskon' => 0],
            ['detail_id' => 5,  'penjualan_id' => 2,  'barang_id' => 11, 'jumlah' => 5, 'harga' => 6000,    'diskon' => 0],
            ['detail_id' => 6,  'penjualan_id' => 2,  'barang_id' => 13, 'jumlah' => 3, 'harga' => 12000,   'diskon' => 0],
            // Transaksi 3
            ['detail_id' => 7,  'penjualan_id' => 3,  'barang_id' => 5,  'jumlah' => 2, 'harga' => 200000,  'diskon' => 0],
            ['detail_id' => 8,  'penjualan_id' => 3,  'barang_id' => 7,  'jumlah' => 5, 'harga' => 4000,    'diskon' => 0],
            ['detail_id' => 9,  'penjualan_id' => 3,  'barang_id' => 14, 'jumlah' => 3, 'harga' => 10000,   'diskon' => 0],
            // Transaksi 4
            ['detail_id' => 10, 'penjualan_id' => 4,  'barang_id' => 2,  'jumlah' => 1, 'harga' => 8000000, 'diskon' => 0],
            ['detail_id' => 11, 'penjualan_id' => 4,  'barang_id' => 9,  'jumlah' => 3, 'harga' => 12000,   'diskon' => 0],
            ['detail_id' => 12, 'penjualan_id' => 4,  'barang_id' => 12, 'jumlah' => 5, 'harga' => 4000,    'diskon' => 0],
            // Transaksi 5
            ['detail_id' => 13, 'penjualan_id' => 5,  'barang_id' => 6,  'jumlah' => 2, 'harga' => 250000,  'diskon' => 0],
            ['detail_id' => 14, 'penjualan_id' => 5,  'barang_id' => 8,  'jumlah' => 3, 'harga' => 18000,   'diskon' => 0],
            ['detail_id' => 15, 'penjualan_id' => 5,  'barang_id' => 15, 'jumlah' => 4, 'harga' => 5000,    'diskon' => 0],
            // Transaksi 6
            ['detail_id' => 16, 'penjualan_id' => 6,  'barang_id' => 7,  'jumlah' => 5, 'harga' => 4000,    'diskon' => 0],
            ['detail_id' => 17, 'penjualan_id' => 6,  'barang_id' => 9,  'jumlah' => 3, 'harga' => 12000,   'diskon' => 0],
            ['detail_id' => 18, 'penjualan_id' => 6,  'barang_id' => 11, 'jumlah' => 4, 'harga' => 6000,    'diskon' => 0],
            // Transaksi 7
            ['detail_id' => 19, 'penjualan_id' => 7,  'barang_id' => 4,  'jumlah' => 2, 'harga' => 55000,   'diskon' => 0],
            ['detail_id' => 20, 'penjualan_id' => 7,  'barang_id' => 13, 'jumlah' => 5, 'harga' => 12000,   'diskon' => 0],
            ['detail_id' => 21, 'penjualan_id' => 7,  'barang_id' => 14, 'jumlah' => 3, 'harga' => 10000,   'diskon' => 0],
            // Transaksi 8
            ['detail_id' => 22, 'penjualan_id' => 8,  'barang_id' => 3,  'jumlah' => 3, 'harga' => 80000,   'diskon' => 0],
            ['detail_id' => 23, 'penjualan_id' => 8,  'barang_id' => 10, 'jumlah' => 5, 'harga' => 5000,    'diskon' => 0],
            ['detail_id' => 24, 'penjualan_id' => 8,  'barang_id' => 12, 'jumlah' => 4, 'harga' => 4000,    'diskon' => 0],
            // Transaksi 9
            ['detail_id' => 25, 'penjualan_id' => 9,  'barang_id' => 7,  'jumlah' => 3, 'harga' => 4000,    'diskon' => 0],
            ['detail_id' => 26, 'penjualan_id' => 9,  'barang_id' => 8,  'jumlah' => 1, 'harga' => 18000,   'diskon' => 0],
            ['detail_id' => 27, 'penjualan_id' => 9,  'barang_id' => 15, 'jumlah' => 4, 'harga' => 5000,    'diskon' => 0],
            // Transaksi 10
            ['detail_id' => 28, 'penjualan_id' => 10, 'barang_id' => 5,  'jumlah' => 1, 'harga' => 200000,  'diskon' => 0],
            ['detail_id' => 29, 'penjualan_id' => 10, 'barang_id' => 6,  'jumlah' => 0, 'harga' => 250000,  'diskon' => 0],
            ['detail_id' => 30, 'penjualan_id' => 10, 'barang_id' => 14, 'jumlah' => 11, 'harga' => 10000,  'diskon' => 0],
        ];
        DB::table('t_penjualan_detail')->insert($data);
    }
}
