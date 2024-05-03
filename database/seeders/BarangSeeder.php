<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang')->insert([
            [
                'kode_barang' => '001',
                'nama_barang' => 'nui',
                'harga_barang'=> 7000,
                'deskripsi_barang' => 'Minuman',
                'satuan_barang' => 'buah'
            ],
            [
                'kode_barang' => '002',
                'nama_barang' => 'Beras',
                'harga_barang'=> 10000,
                'deskripsi_barang' => 'Bahan Rumah Tangga',
                'satuan_barang' => 'kg'
            ],
            [
                'kode_barang' => '003',
                'nama_barang' => 'scraft',
                'harga_barang'=> 60000,
                'deskripsi_barang' => 'Pakaian',
                'satuan_barang' => 'lusin'
            ],
        ]);

    }
}
