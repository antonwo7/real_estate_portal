<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'antonwo7@gmail.com',
            'password' => 'admin',
            'role_id' => 5,
            'avatar' => 'avatars/avatar.png',
            'position' => 'Manager',
            'phone' => '+34 678 136 807',
            'nets' => serialize([
                [
                    'title' => 'Facebook',
                    'link' => '#',
                    'slug' => 'facebook',
                    'icon' => 'fa-facebook',
                ],
                [
                    'title' => 'Twitter',
                    'link' => '#',
                    'slug' => 'twitter',
                    'icon' => 'fa-twitter',
                ],
                [
                    'title' => 'Linkedin',
                    'link' => '#',
                    'slug' => 'linkedin',
                    'icon' => 'fa-linkedin',
                ],
            ])
        ]);

        User::create([
            'name' => 'Anton Ivanov',
            'email' => 'antonwo700@gmail.com',
            'password' => 'admin',
            'role_id' => 4,
            'avatar' => 'avatars/avatar-4.png',
            'position' => 'Project Manager',
            'phone' => '+34 791 136 807',
            'nets' => serialize([
                [
                    'title' => 'Facebook',
                    'link' => '#',
                    'slug' => 'facebook',
                    'icon' => 'fa-facebook',
                ],
                [
                    'title' => 'Twitter',
                    'link' => '#',
                    'slug' => 'twitter',
                    'icon' => 'fa-twitter',
                ],
                [
                    'title' => 'Linkedin',
                    'link' => '#',
                    'slug' => 'linkedin',
                    'icon' => 'fa-linkedin',
                ],
            ])
        ]);

        User::create([
            'name' => 'Sergey Vasiliev',
            'email' => 'omnic.corp@gmail.com',
            'password' => 'admin',
            'role_id' => 4,
            'avatar' => 'avatars/avatar-3.png',
            'position' => 'Project Manager',
            'phone' => '+34 971 136 807',
            'nets' => serialize([
                [
                    'title' => 'Facebook',
                    'link' => '#',
                    'slug' => 'facebook',
                    'icon' => 'fa-facebook',
                ],
                [
                    'title' => 'Twitter',
                    'link' => '#',
                    'slug' => 'twitter',
                    'icon' => 'fa-twitter',
                ],
                [
                    'title' => 'Linkedin',
                    'link' => '#',
                    'slug' => 'linkedin',
                    'icon' => 'fa-linkedin',
                ],
            ])
        ]);

        User::create([
            'name' => 'Anatoliy Sergeev',
            'email' => 'omnic1.corp@gmail.com',
            'password' => 'admin',
            'role_id' => 4,
            'avatar' => 'avatars/avatar-5.png',
            'position' => 'Consultant',
            'phone' => '+34 542 136 807',
            'nets' => serialize([
                [
                    'title' => 'Facebook',
                    'link' => '#',
                    'slug' => 'facebook',
                    'icon' => 'fa-facebook',
                ],
                [
                    'title' => 'Twitter',
                    'link' => '#',
                    'slug' => 'twitter',
                    'icon' => 'fa-twitter',
                ],
                [
                    'title' => 'Linkedin',
                    'link' => '#',
                    'slug' => 'linkedin',
                    'icon' => 'fa-linkedin',
                ],
            ])
        ]);

        User::create([
            'name' => 'Ulia Kozlova',
            'email' => 'omnic2.corp@gmail.com',
            'password' => 'admin',
            'role_id' => 6,
            'avatar' => 'avatars/avatar-7.png',
            'position' => 'Content Manager',
            'phone' => '+34 296 136 807',
            'nets' => serialize([
                [
                    'title' => 'Facebook',
                    'link' => '#',
                    'slug' => 'facebook',
                    'icon' => 'fa-facebook',
                ],
                [
                    'title' => 'Twitter',
                    'link' => '#',
                    'slug' => 'twitter',
                    'icon' => 'fa-twitter',
                ],
                [
                    'title' => 'Linkedin',
                    'link' => '#',
                    'slug' => 'linkedin',
                    'icon' => 'fa-linkedin',
                ],
            ])
        ]);
    }
}
