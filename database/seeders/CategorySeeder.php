<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['Default','Administrator','Kapala Dinas','Sekretaris Dinas','Bidang','UPTD'];

        foreach ($data as $name) {
            $category = Category::create([
                'name' => $name,
            ]);
        }
    }
}
