<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create(['title' => 'Apartments Clean', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. typesetting industry. Lorem Ipsum has been the', 'icon' => 'flaticon-hotel-building']);
        Service::create(['title' => 'Security', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. typesetting industry. Lorem Ipsum has been the', 'icon' => 'flaticon-padlock']);
        Service::create(['title' => 'Air conditioning', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. typesetting industry. Lorem Ipsum has been the', 'icon' => 'flaticon-air-conditioner']);
        Service::create(['title' => 'Support 24/7', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. typesetting industry. Lorem Ipsum has been the', 'icon' => 'flaticon-call-center-agent']);
        Service::create(['title' => 'Trusted Agents', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. typesetting industry. Lorem Ipsum has been the', 'icon' => 'flaticon-agreement']);
        Service::create(['title' => 'Room Service', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. typesetting industry. Lorem Ipsum has been the', 'icon' => 'flaticon-room-service']);
    }
}
