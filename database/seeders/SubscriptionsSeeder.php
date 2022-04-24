<?php

namespace Database\Seeders;

use App\Models\Subscription;
use Illuminate\Database\Seeder;

class SubscriptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subscription::create(['email' => 'antonwo7@gmail.com']);
        Subscription::create(['email' => 'antonwo700@gmail.com']);
        Subscription::create(['email' => 'omnic.corp@gmail.com']);
    }
}
