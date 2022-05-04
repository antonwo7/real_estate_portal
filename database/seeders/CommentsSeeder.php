<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Property;
use Faker\Generator;
use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $properties = Property::all();

        foreach($properties as $property){
            $property_id = $property->id;

            Comment::create(
                [
                    'name' => 'Ivan Ivanov',
                    'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel, dapibus tempus nulla.',
                    'property_id' => $property_id,
                    'avatar' => 'avatar-2.png',
                    'moderated' => true
                ]
            );
        }
    }
}
