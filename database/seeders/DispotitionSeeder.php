<?php

namespace Database\Seeders;

use App\Models\Dispotition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DispotitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['Default','Tanggapan dan Saran','Proses Lebih Lanjut','Koordinasi/Konfirmasi','Lainnya'];

        foreach ($data as $name) {
            $dispotition = Dispotition::create([
                'name' => $name,
            ]);
        }
    }
}
