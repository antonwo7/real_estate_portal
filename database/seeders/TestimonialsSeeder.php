<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimonial::create([
            'name' => 'Maikel Alisa',
            'position' => 'Creative Director',
            'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text everLorem industry\'s standard dummy text everLorem.',
            'avatar' => 'avatar/avatar-1.png',
            'rating' => 4
        ]);
        Testimonial::create([
            'name' => 'Creative Director, india',
            'position' => 'Office Manager',
            'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text everLorem industry\'s standard dummy text everLorem.',
            'avatar' => 'avatar/avatar-2.png',
            'rating' => 5
        ]);
        Testimonial::create([
            'name' => 'Pitarshon Roky',
            'position' => 'Web Designer, Uk',
            'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text everLorem industry\'s standard dummy text everLorem.',
            'avatar' => 'avatar/avatar-3.png',
            'rating' => 3
        ]);
    }
}
