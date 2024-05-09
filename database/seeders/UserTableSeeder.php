<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    // MENAMBAHKAN USER KE DATABASE
    public function run()
    {
        // MEMBUAT USER
        // SETELAH BERHASIL, INSERT KE DATABASE
        // GET SEMUA DATA PERMISSION YANG ADA
        // GET ROLE DENGAN ID 1
        // SETELAH ITU KITA ASSIGN SEMUA PERMISSION DENGAN METHOD syncPermissions
        // ASSIGN ROLE DENGAN METHOD assignRole

        User::create([
            'name'      => 'Admin Tampan',
            'email'     => 'admintampan@gmail.com',
            'password'  => bcrypt('password')
        ]);

        $role = Role::find(1);
        $permissions = Permission::all();

        $role->syncPermissions($permissions);

        $user = User::find(1);
        $user->assignRole($role->name);

    }
}
