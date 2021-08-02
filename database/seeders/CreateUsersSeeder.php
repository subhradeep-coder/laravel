<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@branktank.com',
                'is_admin'=>'1',
               'password'=> bcrypt('1234567'),
            ],
            [
               'name'=>'User',
               'email'=>'user@branktank.com',
                'is_admin'=>'0',
               'password'=> bcrypt('1234567'),
            ],
        ];
  
        foreach ($user as $key => $val) {
            User::create($val);
        }
    }
}
