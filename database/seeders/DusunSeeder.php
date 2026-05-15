<?php

namespace Database\Seeders;

use App\Models\Dusun;
use App\Models\Kecamatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DusunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataWilayah = [
            'Bajeng' => [
                'Kalebajeng',
                'Limbung',
                'Mata Allo',
                'Panciro',
                'Panyangkalang',
            ],
            'Bajeng Barat' => [
                'Borimatangkasa',
                'Gentungang',
                'Mandalle',
                'Manjalling',
                'Tanabangka',
            ],
            'Barombong' => [
                'Kanjilo',
                'Biringala',
                'Moncobalang',
                'Tinggimae',
                'Benteng Somba Opu',
            ],
            'Biringbulu' => [
                'Lauwa',
                'Berutallasa',
                'Borimasunggu',
                'Julukanaya',
                'Pencong',
            ],
            'Bontolempangan' => [
                'Paranglompoa',
                'Bontolempangan',
                'Bontoloe',
                'Julumate’ne',
                'Ulujangang',
            ],
            'Bontomarannu' => [
                'Borongloe',
                'Bontomanai',
                'Nirannuang',
                'Pakatto',
                'Romangloe',
            ],
            'Bontonompo' => [
                'Barembeng',
                'Bategulung',
                'Bontobiraeng',
                'Bontobiraeng Selatan',
                'Bontolangkasa Selatan',
                'Bontonompo',
                'Bulogading',
                'Kalaserena',
                'Katangka',
                'Tamallayang',
            ],
            'Pallangga' => [
                'Tetebatu',
                'Bontoala',
                'Bungaejaya',
                'Jenemadinging',
                'Mangalli',
            ],
            'Pattallassang' => [
                'Pattallassang',
                'Paccellekang',
                'Sunggumanai',
                'Timbuseng',
                'Pallantikang',
            ],
            'Somba Opu' => [
                'Bonto Bontoa',
                'Kalegowa',
                'Katangka',
                'Pandang-Pandang',
                'Samata',
                'Sungguminasa',
                'Tombolo',
            ],
        ];

        foreach ($dataWilayah as $namaKecamatan => $desaKelurahans) {
            $kecamatan = Kecamatan::where('nama_kecamatan', $namaKecamatan)->first();

            if ($kecamatan) {
                foreach ($desaKelurahans as $desaKelurahan) {
                    Dusun::factory()->create([
                        'kecamatan_id' => $kecamatan->id,
                        'desa_kelurahan' => $desaKelurahan,
                    ]);
                }
            }
        }
    }
}
