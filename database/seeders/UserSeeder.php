<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => 'admin']);
        $kadin = Role::create(['name'=> 'kadin']);
        $sekdin = Role::create(['name'=> 'sekdin']);
        $bidang = Role::create(['name'=> 'bidang']);
        $uptd = Role::create(['name'=> 'uptd']);

        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),

        ]);
        $user->assignRole($admin);
    }
}
