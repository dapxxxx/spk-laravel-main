<?php

namespace Database\Seeders;

use App\Models\PertanyaanSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Criteria_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PertanyaanSeeder::create([
            'name'     => 'Superadmin',
            'username' => 'superadmin',
            'email'    => 'superadmin@spk.com',
            'password' => bcrypt('admin123'),
            'level'    => 'SUPERADMIN'
          ]);
    }
}
