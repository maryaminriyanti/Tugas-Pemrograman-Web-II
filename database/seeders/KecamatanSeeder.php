<?php

namespace Database\Seeders;

use App\Models\Kecamatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kecamatans = 
        [
                [
                    'nama_kecamatan' => 'Bajeng',
                    'kode_kecamatan' => 'KEC' . fake()->unique()->numberBetween(100, 999),
                    'alamat_kantor' => 'Kalebajeng, Kec. Bajeng, Kabupaten Gowa, Sulawesi Selatan 92152',
                ],
                [
                    'nama_kecamatan' => 'Bajeng Barat',
                    'kode_kecamatan' => 'KEC' . fake()->unique()->numberBetween(100, 999),
                    'alamat_kantor' => 'Borimatangkasa, Kec. Bajeng Barat, Kabupaten Gowa, Sulawesi Selatan 92152',
                ],
                [
                    'nama_kecamatan' => 'Barombong',
                    'kode_kecamatan' => 'KEC' . fake()->unique()->numberBetween(100, 999),
                    'alamat_kantor' => 'Kanjilo, Kec. Barombong, Kabupaten Gowa, Sulawesi Selatan 90225',
                ],
                [
                    'nama_kecamatan' => 'Biringbulu',
                    'kode_kecamatan' => 'KEC' . fake()->unique()->numberBetween(100, 999),
                    'alamat_kantor' => 'Lauwa, Kec. Biringbulu, Kabupaten Gowa, Sulawesi Selatan',
                ],
                [
                    'nama_kecamatan' => 'Bontolempangan',
                    'kode_kecamatan' => 'KEC' . fake()->unique()->numberBetween(100, 999),
                    'alamat_kantor' => 'Paranglompoa, Kec. Bontolempangan, Kabupaten Gowa, Sulawesi Selatan',
                ],
                [
                    'nama_kecamatan' => 'Bontomarannu',
                    'kode_kecamatan' => 'KEC' . fake()->unique()->numberBetween(100, 999),
                    'alamat_kantor' => 'Jl. Malino, Borongloe, Kec. Bontomarannu, Kabupaten Gowa, Sulawesi Selatan 92171',
                ],
                [
                    'nama_kecamatan' => 'Bontonompo',
                    'kode_kecamatan' => 'KEC' . fake()->unique()->numberBetween(100, 999),
                    'alamat_kantor' => 'Tamallayang, Kec. Bontonompo, Kabupaten Gowa, Sulawesi Selatan 92153',
                ],
                [
                    'nama_kecamatan' => 'Pallangga',
                    'kode_kecamatan' => 'KEC' . fake()->unique()->numberBetween(100, 999),
                    'alamat_kantor' => 'Tetebatu, Kec. Pallangga, Kabupaten Gowa, Sulawesi Selatan 92161',
                ],
                [
                    'nama_kecamatan' => 'Pattallassang',
                    'kode_kecamatan' => 'KEC' . fake()->unique()->numberBetween(100, 999),
                    'alamat_kantor' => 'Pattallasang, Kec. Pattallassang, Kabupaten Gowa, Sulawesi Selatan 92171',
                ],
                [
                    'nama_kecamatan' => 'Somba Opu',
                    'kode_kecamatan' => 'KEC' . fake()->unique()->numberBetween(100, 999),
                    'alamat_kantor' => 'Jl. Sirajuddin Rani No.71, Bonto Bontoa, Kec. Somba Opu, Kabupaten Gowa, Sulawesi Selatan 92114',
                ],
        ];

            foreach ($kecamatans as $kecamatan) 
            {
                Kecamatan::create($kecamatan);
            }
    }
}