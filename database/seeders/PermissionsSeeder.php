<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['title' => 'Post:create', 'slug' => 'post_create']);
        Permission::create(['title' => 'Post:edit', 'slug' => 'post_edit']);
        Permission::create(['title' => 'Post:delete', 'slug' => 'post_delete']);

        Permission::create(['title' => 'Post:own:edit', 'slug' => 'post_own_edit']);
        Permission::create(['title' => 'Post:own:delete', 'slug' => 'post_own_delete']);

        Permission::create(['title' => 'News:create', 'slug' => 'news_create']);
        Permission::create(['title' => 'News:edit', 'slug' => 'news_edit']);
        Permission::create(['title' => 'News:delete', 'slug' => 'news_delete']);
    }
}
