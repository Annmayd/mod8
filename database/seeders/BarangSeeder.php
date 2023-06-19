<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'kode_barang' => 'M1',
                'nama_barang' => 'Fortune',
                'harga_barang' => 18000,
                'deskripsi_barang'=> 'Minyak goreng',
                'satuan_barang' => 1
            ],
            [
                'kode_barang' => 'S1',
                'nama_barang' => 'Indomilk',
                'harga_barang' => 10000,
                'deskripsi_barang'=> 'Susu kental manis',
                'satuan_barang' => 2
            ],
            [
                'kode_barang' => 'C1',
                'nama_barang' => 'Delfi',
                'harga_barang' => 20000,
                'deskripsi_barang'=> 'Coklat batang',
                'satuan_barang' => 3
            ],
            
        ]);
    }
}