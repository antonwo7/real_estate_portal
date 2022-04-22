<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SlidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::create(['title' => 'DISCOVER MODERN VILLA', 'subtitle' => 'The Best Real Estate Deals', 'link' => '#', 'image' => '/sliders/img-1.png']);
        Slider::create(['title' => 'BEST PLACE FOR SELL PROPERTIES', 'subtitle' => 'The Best Real Estate Deals', 'link' => '#', 'image' => '/sliders/img-2.png']);
        Slider::create(['title' => 'BEST PLACE FOR SELL PROPERTIES', 'subtitle' => 'The Best Real Estate Deals', 'link' => '#', 'image' => '/sliders/img-3.png']);
    }
}
