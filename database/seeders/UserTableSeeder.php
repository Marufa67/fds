<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          'name'=>'user',
          'email'=>'user@gmail.com',
          'password'=>bcrypt('12345'),
          'phone_no'=>'98475709q54',
          'role'=>'admin',
        ]);
    }
}
