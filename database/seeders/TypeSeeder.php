<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['Default','Administrator','Kepala Dinas','Sekretaris Dinas','Subbagian Umum dan Kepegaiawan','Perencanaan','Keuangan','Prasarana dan Sarana Pertanian','Holtikultura dan Perkebunan','Peternakan','Kesehatan Hewan dan Kesehatan Masyarakat Veteriner','Penyuluhan','Tanaman Pangan','Balai Benih','Puskeswan','Pengelolaan Pertanian dan Peternakan','Rumah Potong Hewan'];

        // Definisikan kategori berdasarkan rentang $key
        $categoryMappings = [
            1 => 'Administrator',
            2 => 'Kepala Dinas',
            3 => 'Sekretaris Dinas',
            4 => 'Sekretaris Dinas',
            5 => 'Sekretaris Dinas',
            6 => 'Sekretaris Dinas',
            7 => 'Bidang',
            8 => 'Bidang',
            9 => 'Bidang',
            10 => 'Bidang',
            11 => 'Bidang',
            12 => 'Bidang',
            13 => 'UPTD',
            14 => 'UPTD',
            15 => 'UPTD',
            16 => 'UPTD'
        ];

        // Ambil semua kategori yang diperlukan dari database dalam satu query
        $categories = Category::whereIn('name', array_unique(array_values($categoryMappings)))
            ->pluck('id', 'name');

        // Loop melalui data dan tentukan kategori berdasarkan $key
        foreach ($data as $key => $value) {
            // Tentukan kategori berdasarkan $key
            if ($key > 0) {
                $where = $categoryMappings[$key] ?? 'Default';
            } else {
                $where = 'Default';
            }
            
            // Ambil ID kategori dari hasil query
            $categoryId = $categories[$where] ?? null;

            // Jika kategori ditemukan, buat tipe baru
            if ($categoryId) {
                Type::create([
                    'name' => $value,
                    'category_id' => $categoryId
                ]);
            }
        }
    }
}
