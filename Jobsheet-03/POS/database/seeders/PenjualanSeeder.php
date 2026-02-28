<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['penjualan_id' => 1, 'user_id' => 3, 'pembeli' => 'Andi', 'penjualan_kode' => 'P001', 'penjualan_tanggal' => '2024-02-01'],
            ['penjualan_id' => 2, 'user_id' => 3, 'pembeli' => 'Budi', 'penjualan_kode' => 'P002', 'penjualan_tanggal' => '2024-02-02'],
            ['penjualan_id' => 3, 'user_id' => 3, 'pembeli' => 'Citra', 'penjualan_kode' => 'P003', 'penjualan_tanggal' => '2024-02-03'],
            ['penjualan_id' => 4, 'user_id' => 3, 'pembeli' => 'Dewi', 'penjualan_kode' => 'P004', 'penjualan_tanggal' => '2024-02-04'],
            ['penjualan_id' => 5, 'user_id' => 3, 'pembeli' => 'Eko', 'penjualan_kode' => 'P005', 'penjualan_tanggal' => '2024-02-05'],
            ['penjualan_id' => 6, 'user_id' => 3, 'pembeli' => 'Fina', 'penjualan_kode' => 'P006', 'penjualan_tanggal' => '2024-02-06'],
            ['penjualan_id' => 7, 'user_id' => 3, 'pembeli' => 'Gina', 'penjualan_kode' => 'P007', 'penjualan_tanggal' => '2024-02-07'],
            ['penjualan_id' => 8, 'user_id' => 3, 'pembeli' => 'Hadi', 'penjualan_kode' => 'P008', 'penjualan_tanggal' => '2024-02-08'],
            ['penjualan_id' => 9, 'user_id' => 3, 'pembeli' => 'Ika', 'penjualan_kode' => 'P009', 'penjualan_tanggal' => '2024-02-09'],
            ['penjualan_id' => 10, 'user_id' => 3, 'pembeli' => 'Joko', 'penjualan_kode' => 'P010', 'penjualan_tanggal' => '2024-02-10'],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
