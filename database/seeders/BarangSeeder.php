<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // Kategori 1 - Elektronik (3 barang)
            ['barang_id' => 1,  'kategori_id' => 1, 'barang_kode' => 'BRG001', 'barang_nama' => 'HP Samsung A15',   'harga_beli' => 2000000, 'harga_jual' => 2500000, 'stok' => 50],
            ['barang_id' => 2,  'kategori_id' => 1, 'barang_kode' => 'BRG002', 'barang_nama' => 'Laptop ASUS X415', 'harga_beli' => 7000000, 'harga_jual' => 8000000, 'stok' => 20],
            ['barang_id' => 3,  'kategori_id' => 1, 'barang_kode' => 'BRG003', 'barang_nama' => 'Charger USB Type-C','harga_beli' => 50000,   'harga_jual' => 80000,   'stok' => 100],
            // Kategori 2 - Pakaian (3 barang)
            ['barang_id' => 4,  'kategori_id' => 2, 'barang_kode' => 'BRG004', 'barang_nama' => 'Kaos Polos Putih', 'harga_beli' => 30000,   'harga_jual' => 55000,   'stok' => 200],
            ['barang_id' => 5,  'kategori_id' => 2, 'barang_kode' => 'BRG005', 'barang_nama' => 'Celana Jeans Pria','harga_beli' => 120000,  'harga_jual' => 200000,  'stok' => 80],
            ['barang_id' => 6,  'kategori_id' => 2, 'barang_kode' => 'BRG006', 'barang_nama' => 'Jaket Hoodie',     'harga_beli' => 150000,  'harga_jual' => 250000,  'stok' => 60],
            // Kategori 3 - Makanan (3 barang)
            ['barang_id' => 7,  'kategori_id' => 3, 'barang_kode' => 'BRG007', 'barang_nama' => 'Indomie Goreng',   'harga_beli' => 3000,    'harga_jual' => 4000,    'stok' => 500],
            ['barang_id' => 8,  'kategori_id' => 3, 'barang_kode' => 'BRG008', 'barang_nama' => 'Roti Tawar Sari Roti','harga_beli' => 12000, 'harga_jual' => 18000,  'stok' => 150],
            ['barang_id' => 9,  'kategori_id' => 3, 'barang_kode' => 'BRG009', 'barang_nama' => 'Biskuit Oreo',     'harga_beli' => 8000,    'harga_jual' => 12000,   'stok' => 300],
            // Kategori 4 - Minuman (3 barang)
            ['barang_id' => 10, 'kategori_id' => 4, 'barang_kode' => 'BRG010', 'barang_nama' => 'Air Mineral Aqua', 'harga_beli' => 3000,    'harga_jual' => 5000,    'stok' => 400],
            ['barang_id' => 11, 'kategori_id' => 4, 'barang_kode' => 'BRG011', 'barang_nama' => 'Teh Botol Sosro',  'harga_beli' => 4000,    'harga_jual' => 6000,    'stok' => 250],
            ['barang_id' => 12, 'kategori_id' => 4, 'barang_kode' => 'BRG012', 'barang_nama' => 'Kopi Sachet Kapal Api','harga_beli' => 2500, 'harga_jual' => 4000,   'stok' => 350],
            // Kategori 5 - Alat Tulis (3 barang)
            ['barang_id' => 13, 'kategori_id' => 5, 'barang_kode' => 'BRG013', 'barang_nama' => 'Pulpen Pilot G2',  'harga_beli' => 8000,    'harga_jual' => 12000,   'stok' => 200],
            ['barang_id' => 14, 'kategori_id' => 5, 'barang_kode' => 'BRG014', 'barang_nama' => 'Buku Tulis Sinar Dunia','harga_beli' => 7000, 'harga_jual' => 10000, 'stok' => 300],
            ['barang_id' => 15, 'kategori_id' => 5, 'barang_kode' => 'BRG015', 'barang_nama' => 'Penghapus Staedtler','harga_beli' => 3000,  'harga_jual' => 5000,   'stok' => 150],
        ];
        DB::table('m_barang')->insert($data);
    }
}
