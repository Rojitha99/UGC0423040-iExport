<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::create(['name' => 'buyer']);
        Role::create(['name' => 'seller']);
        Role::create(['name' => 'investor']);
        // Add more roles as needed
    }
}
