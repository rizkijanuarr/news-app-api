<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesTableSeeder extends Seeder
{
    // MENAMBAHKAN TABLE ROLES SEEDERS
    public function run()
    {
        Role::create([
            'name' => 'admin',
            'guard_name' => 'api'
        ]);
    }
}
