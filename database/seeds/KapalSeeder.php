<?php

use App\Kapal;
use Illuminate\Database\Seeder;

class KapalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kapal::create([
            'nama_kapal'=>'Kapal Pesiar'
        ]);
        Kapal::create([
            'nama_kapal'=>'Kapal Selam'
        ]);
        Kapal::create([
            'nama_kapal'=>'Kapal Terbang'
        ]);
    }
}
