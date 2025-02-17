<?php

namespace Database\Seeders;

use App\Models\gejala;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GejalaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        gejala::truncate();

        $data = [
            ['nama_gejala' => 'Layar Mati', 'deskripsi_gejala'=> 'layar komputer tidak menyala'],
            ['nama_gejala' => 'keyboard ketik tidak semestinya', 'deskripsi_gejala'=> 'keyboard ketik tidak semestinya '],
            ['nama_gejala' => 'booting lama', 'deskripsi_gejala'=> 'booting lama sekali'],
            ['nama_gejala' => 'kipas mengeluarkan suara', 'deskripsi_gejala'=> 'kipas mengeluarkan suara keras'],
            ['nama_gejala' => 'daya tidak terisi', 'deskripsi_gejala'=> 'daya tidak bisa terisi'],
         
        ];

        foreach ($data as  $value) {
            # code...
            gejala::insert([
                'nama_gejala' => $value['nama_gejala'],
                'deskripsi_gejala' => $value['deskripsi_gejala'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

        }
    }
}
