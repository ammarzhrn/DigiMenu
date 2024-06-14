<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = new \App\Models\Menu;
        $data->id_meja = 1;
        $data->nama_menu = 'Nasi Sudah Menjadi Bubur';
        $data->kategori = 'food';
        $data->gambar = 'none';
        $data->harga = 19000;
        $data->add_ons = 'Aku Adalah Add Ons';
        $data->desc = 'Aku Adalah Desc';
        $data->availibility = 0;
        $data->save();
    }
}
