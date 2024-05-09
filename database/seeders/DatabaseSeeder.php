<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    // REGISTER SEEDERS
    public function run()
    {
        $this->call(RolesTableSeeder::class);
    }
}
