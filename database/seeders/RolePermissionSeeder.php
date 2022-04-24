<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\RolePermission;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $agent_user_id = Role::where('slug', 'agent')->get()->first()->id;
        $admin_user_id = Role::where('slug', 'admin')->get()->first()->id;
        $redactor_user_id = Role::where('slug', 'redactor')->get()->first()->id;

        $post_create_perm_id = Permission::where('slug', 'post_create')->get()->first()->id;
        $post_edit_perm_id = Permission::where('slug', 'post_edit')->get()->first()->id;
        $post_delete_perm_id = Permission::where('slug', 'post_delete')->get()->first()->id;
        $post_own_edit_perm_id = Permission::where('slug', 'post_own_edit')->get()->first()->id;
        $post_own_delete_perm_id = Permission::where('slug', 'post_own_delete')->get()->first()->id;
        $news_create_perm_id = Permission::where('slug', 'news_create')->get()->first()->id;
        $news_edit_perm_id = Permission::where('slug', 'news_edit')->get()->first()->id;
        $news_delete_perm_id = Permission::where('slug', 'news_delete')->get()->first()->id;

        RolePermission::create(['role_id' => $admin_user_id, 'permission_id' => $post_create_perm_id]);
        RolePermission::create(['role_id' => $admin_user_id, 'permission_id' => $post_edit_perm_id]);
        RolePermission::create(['role_id' => $admin_user_id, 'permission_id' => $post_delete_perm_id]);
        RolePermission::create(['role_id' => $admin_user_id, 'permission_id' => $news_create_perm_id]);
        RolePermission::create(['role_id' => $admin_user_id, 'permission_id' => $news_edit_perm_id]);
        RolePermission::create(['role_id' => $admin_user_id, 'permission_id' => $news_delete_perm_id]);
        RolePermission::create(['role_id' => $admin_user_id, 'permission_id' => $news_create_perm_id]);
        RolePermission::create(['role_id' => $admin_user_id, 'permission_id' => $news_edit_perm_id]);
        RolePermission::create(['role_id' => $admin_user_id, 'permission_id' => $news_delete_perm_id]);

        RolePermission::create(['role_id' => $agent_user_id, 'permission_id' => $post_create_perm_id]);
        RolePermission::create(['role_id' => $agent_user_id, 'permission_id' => $post_own_edit_perm_id]);
        RolePermission::create(['role_id' => $agent_user_id, 'permission_id' => $post_own_delete_perm_id]);

        RolePermission::create(['role_id' => $redactor_user_id, 'permission_id' => $news_create_perm_id]);
        RolePermission::create(['role_id' => $redactor_user_id, 'permission_id' => $news_edit_perm_id]);
        RolePermission::create(['role_id' => $redactor_user_id, 'permission_id' => $news_delete_perm_id]);
    }
}
