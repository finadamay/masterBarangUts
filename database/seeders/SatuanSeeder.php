<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('satuan')->insert([
            [
                'kode_satuan' => '001',
                'nama_satuan' => 'buah'
            ],
            [
                'kode_satuan' => '002',
                'nama_satuan' => 'kg'
            ],
            [
                'kode_satuan' => '003',
                'nama_satuan' => 'lusin'
            ],
        ]);

    }
}
