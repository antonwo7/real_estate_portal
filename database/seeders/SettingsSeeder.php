<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Setting::create(['field' => 'phone', 'value' => '+0477 85X6 552']);
        Setting::create(['field' => 'fax', 'value' => '+0487 85X6 224']);
        Setting::create(['field' => 'email', 'value' => 'info@themevessel.com']);
        Setting::create(['field' => 'address', 'value' => '20/F Green Road, Dhanmondi, Dhaka']);
        Setting::create(['field' => 'skype', 'value' => 'info@green.com']);
        Setting::create(['field' => 'schedule', 'value' => 'Mon - Sun: 8:00am - 6:00pm']);
        Setting::create(['field' => 'white_logo_file', 'value' => '/common/logo-white.png']);
        Setting::create(['field' => 'black_logo_file', 'value' => '/common/black-logo.png']);
        Setting::create(['field' => 'site_title', 'value' => 'This is a portal']);
        Setting::create(['field' => 'nets', 'value' => serialize([
            [ 'url' => '#', 'slug' => 'facebook', 'icon' => 'fa-facebook' ],
            [ 'url' => '#', 'slug' => 'twitter', 'icon' => 'fa-twitter' ],
            [ 'url' => '#', 'slug' => 'instagram', 'icon' => 'fa-instagram' ],
        ])], 'serialized');
    }
}
