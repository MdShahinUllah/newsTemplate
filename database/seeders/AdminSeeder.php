<?php

namespace Database\Seeders;

use App\Models\adminUser;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        adminUser::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>'passowrd',
            'address'=>'monsurabad abdul hakim road',
            'phone'=>'01839213548',
            'role'=>'admin'
        ]);
    }
}
