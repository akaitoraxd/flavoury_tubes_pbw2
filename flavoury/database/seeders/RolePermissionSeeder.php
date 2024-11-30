<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'dashboard-admin']);

        Permission::create(['name' => 'tambah-recipe']);
        Permission::create(['name' => 'edit-recipe']);
        Permission::create(['name' => 'hapus-recipe']);
        Permission::create(['name' => 'lihat-recipe']);

        Permission::create(['name' => 'tambah-item']);
        Permission::create(['name' => 'edit-item']);
        Permission::create(['name' => 'hapus-item']);

        Permission::create(['name' => 'home-user']);
        Permission::create(['name' => 'tambah-feedback']);
        Permission::create(['name' => 'market-page']);

        Role::create(['name'=>'admin']);
        Role::create(['name'=>'user']);

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('dashboard-admin');
        $roleAdmin->givePermissionTo('tambah-item');
        $roleAdmin->givePermissionTo('edit-item');
        $roleAdmin->givePermissionTo('hapus-item');

        $roleUser = Role::findByName('user');
        $roleUser->givePermissionTo('home-user');
        $roleUser->givePermissionTo('tambah-feedback');
        $roleUser->givePermissionTo('market-page');
        $roleUser->givePermissionTo('tambah-recipe');
        $roleUser->givePermissionTo('edit-recipe');
        $roleUser->givePermissionTo('hapus-recipe');
        $roleUser->givePermissionTo('lihat-recipe');
    }
}
