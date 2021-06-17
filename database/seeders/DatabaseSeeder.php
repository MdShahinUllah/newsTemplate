<?php

namespace Database\Seeders;

use App\Models\adminUser;
use App\Models\business;
use App\Models\entertainment;
use App\Models\sport;
use App\Models\technology;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            AdminSeeder::class,
        ]);

        business::factory('10')->create();
        entertainment::factory('10')->create();
        sport::factory('10')->create();
        technology::factory('10')->create();

    }
}
