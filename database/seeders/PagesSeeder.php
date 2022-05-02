<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::getQuery()->delete();

        Page::create([
            'title' => 'Home',
            'content' => '',
            'meta_description' => 'New portal of real estate properties',
            'meta_keywords' => 'portal, real estate',
            'meta_title' => 'New portal of real estate properties',
            'slug' => 'index',
            'in_menu' => 1
        ]);

        Page::create([
            'title' => 'About',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel,dapibus tempus nulla. Donec vel nulla dui. Pellentesque sed ante sed ligula hendrerit condimentum. Suspendisse rhoncus fringilla ipsum quis porta. Morbi tincidunt viverra pharetra.',
            'meta_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam',
            'meta_keywords' => 'portal, real estate',
            'meta_title' => 'About our portal',
            'in_menu' => 1
        ]);

        Page::create([
            'title' => 'Properties',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel,dapibus tempus nulla. Donec vel nulla dui. Pellentesque sed ante sed ligula hendrerit condimentum. Suspendisse rhoncus fringilla ipsum quis porta. Morbi tincidunt viverra pharetra.',
            'meta_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam',
            'meta_keywords' => 'portal, real estate',
            'meta_title' => 'Properties of our portal',
            'in_menu' => 1
        ]);
    }
}
