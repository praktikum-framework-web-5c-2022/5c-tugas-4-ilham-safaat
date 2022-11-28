<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MataKuliah>
 */
class MataKuliahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = Faker::create();
        return [
            'kode_mk' =>  $faker->numerify('IF###'),
            'nama_mk' =>  $faker->randomElement([
                'Algoritma Pemrograman',
                'Struktur Data',
                'Basis Data',
                'Pemrograman Berorientasi Objek',
                'Jaringan Komputer',
                'Pemrograman Berbasis Web',
                'Sistem Operasi',
                'Pemrograman Berbasis Mobile',
                'Data Mining',
                'Framework Pemrograman Web',
                'Machine Learning',
                'Pengolahan Citra Digital',
                'Pengenalan Algoritma Pemrograman',
                'Pengenalan Basis Data',
                'Algoritma Struktur Data',
                'Statistika Probabilitas',
                'Fisika Dasar',
                'Sistem Informasi Akuntansi dan Keuangan',
                'Jaringan Keamanan Sistem',
                'Pemrograman Perangkat Bergerak',
                'Komputasi Awan',
                'Pemrograman Animasi Multimedia'
            ]),
            'sks' => $faker->numberBetween(1,3),
            'nama_dosen' => $faker->name()

        ];
    }
}
