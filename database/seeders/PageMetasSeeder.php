<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\PageMeta;
use Illuminate\Database\Seeder;

class PageMetasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $home_page_id = Page::where('slug', 'index')->get()->first()->id;
        $about_page_id = Page::where('slug', 'about')->get()->first()->id;

        PageMeta::getQuery()->delete();

        PageMeta::create(['title' => 'Featured section title', 'value' => 'Featured Properties', 'page_id' => $home_page_id]);
        PageMeta::create(['title' => 'Featured section subtitle', 'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.', 'page_id' => $home_page_id]);
        PageMeta::create(['title' => 'Services section title', 'value' => 'What Are you Looking For?', 'page_id' => $home_page_id]);
        PageMeta::create(['title' => 'Services section subtitle', 'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.', 'page_id' => $home_page_id]);
        PageMeta::create(['title' => 'Recent section title', 'value' => 'Recent Properties', 'page_id' => $home_page_id]);
        PageMeta::create(['title' => 'Recent section subtitle', 'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.', 'page_id' => $home_page_id]);
        PageMeta::create(['title' => 'Locations section title', 'value' => 'Most Popular Places', 'page_id' => $home_page_id]);
        PageMeta::create(['title' => 'Locations section subtitle', 'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.', 'page_id' => $home_page_id]);
        PageMeta::create(['title' => 'Agents section title', 'value' => 'Meet Our Agents', 'page_id' => $home_page_id]);
        PageMeta::create(['title' => 'Agents section subtitle', 'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.', 'page_id' => $home_page_id]);
        PageMeta::create(['title' => 'Testimonials section title', 'value' => 'Our Testimonial', 'page_id' => $home_page_id]);
        PageMeta::create(['title' => 'Testimonials section subtitle', 'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.', 'page_id' => $home_page_id]);
        PageMeta::create(['title' => 'Blog section title', 'value' => 'Latest Blog', 'page_id' => $home_page_id]);
        PageMeta::create(['title' => 'Blog section subtitle', 'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.', 'page_id' => $home_page_id]);
        PageMeta::create(['title' => 'Subscription section title', 'value' => 'Get Newsletter', 'page_id' => $home_page_id]);
        PageMeta::create(['title' => 'Subscription section subtitle', 'value' => 'Your download should start automatically, if not Click here. Should I give up, huh?.', 'page_id' => $home_page_id]);

        PageMeta::create(['title' => 'Header banner', 'value' => 'banners/img-3.png', 'page_id' => $about_page_id]);
    }
}
