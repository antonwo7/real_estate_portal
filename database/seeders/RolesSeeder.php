<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['title' => 'Agent', 'slug' => 'agent']);
        Role::create(['title' => 'Admin', 'slug' => 'admin']);
        Role::create(['title' => 'Redactor', 'slug' => 'redactor']);
    }
}
