<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Penduduk;

class PendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Penduduk::create([
            'nik'=>'3507123456780001',
            'nama'=>'Budi Santoso',
            'jk'=>'L',
            'alamat'=>'JL Merdeka No. 10,RT 01 RW 01'
        ]);
        Penduduk::create([
            'nik'=>'3507123456780002',
            'nama'=>'Joko Santoso',
            'jk'=>'L',
            'alamat'=>'JL Suhat No. 10,RT 01 RW 01 Solo'
        ]);
        Penduduk::create([
            'nik'=>'3507123456780003',
            'nama'=>'Slamet Santoso',
            'jk'=>'P',
            'alamat'=>'JL Sultan No. 10,RT 01 RW 01 Malang'
        ]);
        Penduduk::create([
            'nik'=>'3507123456780004',
            'nama'=>'Siti Santoso',
            'jk'=>'P',
            'alamat'=>'JL Agung No. 10,RT 01 RW 01 Bogor'
        ]);

}
}
