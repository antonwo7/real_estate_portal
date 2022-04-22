<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Seeder;

class PropertiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Property::create([
            'title' => 'Modern Family Home',
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel,dapibus tempus nulla. Donec vel nulla dui. Pellentesque sed ante sed ligula hendrerit condimentum. Suspendisse rhoncus fringilla ipsum quis porta. Morbi tincidunt viverra pharetra.',
            'address' => '20/F Green Road, Dhanmondi, Dhaka',
            'zipcode' => '2451',
            'bedrooms' => '2',
            'bathrooms' => '2',
            'square' => '120',
            'price' => '154000',
            'property_id' => 'VA-0001',
            'land' => 1200,
            'year' => 2019,
            'images' => serialize(["img-1.png","img-2.png"]),
            'planes' => '',
            'features' => '',
            'video' => 'https://youtu.be/6XMuUVw7TOM',
            'related_properties' => '',
        ]);
        Property::create([
            'title' => 'Relaxing Apartment',
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel,dapibus tempus nulla. Donec vel nulla dui. Pellentesque sed ante sed ligula hendrerit condimentum. Suspendisse rhoncus fringilla ipsum quis porta. Morbi tincidunt viverra pharetra.',
            'address' => '20/F Green Road, Dhanmondi, Dhaka',
            'zipcode' => '2451',
            'bedrooms' => 2,
            'bathrooms' => 1,
            'square' => 100,
            'price' => 124000,
            'property_id' => 'VA-0002',
            'land' => 0,
            'year' => 2020,
            'images' => serialize(["img-3.png","img-4.png"]),
            'planes' => '',
            'features' => '',
            'video' => 'https://youtu.be/6XMuUVw7TOM',
            'related_properties' => '',
        ]);
        Property::create([
            'title' => 'Beautiful Single Home',
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel,dapibus tempus nulla. Donec vel nulla dui. Pellentesque sed ante sed ligula hendrerit condimentum. Suspendisse rhoncus fringilla ipsum quis porta. Morbi tincidunt viverra pharetra.',
            'address' => '20/F Green Road, Dhanmondi, Dhaka',
            'zipcode' => '2451',
            'bedrooms' => '4',
            'bathrooms' => '4',
            'square' => '220',
            'price' => '214000',
            'property_id' => 'VA-0003',
            'land' => '1500',
            'year' => '2019',
            'images' => serialize(["img-3.png","img-1.png"]),
            'planes' => '',
            'features' => '',
            'video' => 'https://youtu.be/6XMuUVw7TOM',
            'related_properties' => '',
        ]);
        Property::create([
            'title' => 'Real Luxury Villa',
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel,dapibus tempus nulla. Donec vel nulla dui. Pellentesque sed ante sed ligula hendrerit condimentum. Suspendisse rhoncus fringilla ipsum quis porta. Morbi tincidunt viverra pharetra.',
            'address' => '20/F Green Road, Dhanmondi, Dhaka',
            'zipcode' => '2451',
            'bedrooms' => '3',
            'bathrooms' => '3',
            'square' => '200',
            'price' => '205000',
            'property_id' => 'VA-0004',
            'land' => 0,
            'year' => '2019',
            'images' => serialize(["img-2.png","img-4.png"]),
            'planes' => '',
            'features' => '',
            'video' => 'https://youtu.be/6XMuUVw7TOM',
            'related_properties' => '',
            'featured' => true
        ]);
        Property::create([
            'title' => 'Masons Villas',
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel,dapibus tempus nulla. Donec vel nulla dui. Pellentesque sed ante sed ligula hendrerit condimentum. Suspendisse rhoncus fringilla ipsum quis porta. Morbi tincidunt viverra pharetra.',
            'address' => '20/F Green Road, Dhanmondi, Dhaka',
            'zipcode' => '2451',
            'bedrooms' => '5',
            'bathrooms' => '5',
            'square' => '320',
            'price' => '354000',
            'property_id' => 'VA-0005',
            'land' => '1500',
            'year' => '2020',
            'images' => serialize(["img-4.png","img-1.png"]),
            'planes' => '',
            'features' => '',
            'video' => 'https://youtu.be/6XMuUVw7TOM',
            'related_properties' => '',
            'featured' => true
        ]);
        Property::create([
            'title' => 'Sweet Family Home',
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel,dapibus tempus nulla. Donec vel nulla dui. Pellentesque sed ante sed ligula hendrerit condimentum. Suspendisse rhoncus fringilla ipsum quis porta. Morbi tincidunt viverra pharetra.',
            'address' => '20/F Green Road, Dhanmondi, Dhaka',
            'zipcode' => '2451',
            'bedrooms' => '4',
            'bathrooms' => '3',
            'square' => '310',
            'price' => '300000',
            'property_id' => 'VA-0006',
            'land' => '1400',
            'year' => '2019',
            'images' => serialize(["img-5.png","img-2.png"]),
            'planes' => '',
            'features' => '',
            'video' => 'https://youtu.be/6XMuUVw7TOM',
            'related_properties' => '',
            'featured' => true
        ]);
        Property::create([
            'title' => 'Modern Villa',
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel,dapibus tempus nulla. Donec vel nulla dui. Pellentesque sed ante sed ligula hendrerit condimentum. Suspendisse rhoncus fringilla ipsum quis porta. Morbi tincidunt viverra pharetra.',
            'address' => '20/F Green Road, Dhanmondi, Dhaka',
            'zipcode' => '2451',
            'bedrooms' => 2,
            'bathrooms' => 2,
            'square' => 90,
            'price' => '104000',
            'property_id' => 'VA-0007',
            'land' => 0,
            'year' => 2018,
            'images' => serialize(["img-4.png","img-3.png"]),
            'planes' => '',
            'features' => '',
            'video' => 'https://youtu.be/6XMuUVw7TOM',
            'related_properties' => '',
        ]);
        Property::create([
            'title' => 'Modern Bungalow',
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel,dapibus tempus nulla. Donec vel nulla dui. Pellentesque sed ante sed ligula hendrerit condimentum. Suspendisse rhoncus fringilla ipsum quis porta. Morbi tincidunt viverra pharetra.',
            'address' => '20/F Green Road, Dhanmondi, Dhaka',
            'zipcode' => '2451',
            'bedrooms' => 3,
            'bathrooms' => 2,
            'square' => 87,
            'price' => 98000,
            'property_id' => 'VA-0008',
            'land' => 0,
            'year' => 2002,
            'images' => serialize(["img-6.png","img-5.png"]),
            'planes' => '',
            'features' => '',
            'video' => 'https://youtu.be/6XMuUVw7TOM',
            'related_properties' => '',
            'featured' => true
        ]);
    }
}
