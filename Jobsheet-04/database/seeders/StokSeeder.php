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
        $data = [
            ['stok_id' => 1, 'barang_id' => 1, 'user_id' => 1, 'supplier_id' => 1, 'stok_jumlah' => 100, 'stok_tanggal' => '2024-01-01'],
            ['stok_id' => 2, 'barang_id' => 2, 'user_id' => 2, 'supplier_id' => 2, 'stok_jumlah' => 200, 'stok_tanggal' => '2024-01-02'],
            ['stok_id' => 3, 'barang_id' => 3, 'user_id' => 3, 'supplier_id' => 3, 'stok_jumlah' => 150, 'stok_tanggal' => '2024-01-03'],
            ['stok_id' => 4, 'barang_id' => 4, 'user_id' => 1, 'supplier_id' => 1, 'stok_jumlah' => 80, 'stok_tanggal' => '2024-01-04'],
            ['stok_id' => 5, 'barang_id' => 5, 'user_id' => 2, 'supplier_id' => 2, 'stok_jumlah' => 120, 'stok_tanggal' => '2024-01-05'],
            ['stok_id' => 6, 'barang_id' => 6, 'user_id' => 3, 'supplier_id' => 3, 'stok_jumlah' => 90, 'stok_tanggal' => '2024-01-06'],
            ['stok_id' => 7, 'barang_id' => 7, 'user_id' => 1, 'supplier_id' => 1, 'stok_jumlah' => 60, 'stok_tanggal' => '2024-01-07'],
            ['stok_id' => 8, 'barang_id' => 8, 'user_id' => 2, 'supplier_id' => 2, 'stok_jumlah' => 110, 'stok_tanggal' => '2024-01-08'],
            ['stok_id' => 9, 'barang_id' => 9, 'user_id' => 3, 'supplier_id' => 3, 'stok_jumlah' => 70, 'stok_tanggal' => '2024-01-09'],
            ['stok_id'=> 10, 'barang_id'=> 10, 'user_id' => 1, 'supplier_id' => 1, 'stok_jumlah' => 130, 'stok_tanggal' => '2024-01-10'],
            ['stok_id'=> 11, 'barang_id'=> 11, 'user_id' => 2, 'supplier_id' => 2, 'stok_jumlah' => 140, 'stok_tanggal' => '2024-01-11'],
            ['stok_id' => 12, 'barang_id' => 12, 'user_id' => 3, 'supplier_id' => 3, 'stok_jumlah' => 50, 'stok_tanggal' => '2024-01-12'],
            ['stok_id' => 13, 'barang_id' => 13, 'user_id' => 1, 'supplier_id' => 1, 'stok_jumlah' => 30, 'stok_tanggal' => '2024-01-13'],
            ['stok_id' => 14, 'barang_id' => 14, 'user_id' => 2, 'supplier_id' => 2, 'stok_jumlah' => 40, 'stok_tanggal' => '2024-01-14'],
            ['stok_id' => 15, 'barang_id' => 15, 'user_id' => 3, 'supplier_id' => 3, 'stok_jumlah' => 20, 'stok_tanggal' => '2024-01-15'],
        ];
        DB::table('t_stok')->insert($data);
    }
}
