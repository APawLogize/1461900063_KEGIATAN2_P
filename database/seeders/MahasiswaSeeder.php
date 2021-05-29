<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs1 = new Mahasiswa();
        $mhs1->nbi = "123450001";
        $mhs1->nama_mhs = "Frans";
        $mhs1->save();

        $mhs2 = new Mahasiswa();
        $mhs2->nbi = "123450002";
        $mhs2->nama_mhs = "Ruiz";
        $mhs2->save();

        $mhs3 = new Mahasiswa();
        $mhs3->nbi = "123450003";
        $mhs3->nama_mhs = "Yoga";
        $mhs3->save();

        $mhs4 = new Mahasiswa();
        $mhs4->nbi = "123450004";
        $mhs4->nama_mhs = "Aldi";
        $mhs4->save();
    }
}