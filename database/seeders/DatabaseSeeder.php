<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    User::create([
      'name'     => 'Superadmin',
      'username' => 'superadmin',
      'email'    => 'superadmin@spk.com',
      'password' => bcrypt('admin123'),
      'level'    => 'SUPERADMIN'
    ]);
    User::create([
      'name'     => 'User1',
      'username' => 'user1',
      'email'    => 'user1@spk.com',
      'password' => bcrypt('user123'),
    //   'level'    => 'SUPERADMIN'
    ]);
  }
}
