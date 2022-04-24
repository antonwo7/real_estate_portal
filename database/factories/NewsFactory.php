<?php

namespace Database\Factories;

use App\Models\News;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    protected $model = News::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $date = $this->faker->dateTimeBetween('-1 day' );
        $redactors = User::whereHas('role', function($q){
            $q->where('slug', 'redactor');
        })->get();

        return [
            'title' => $this->faker->text(20),
            'text' => $this->faker->text(500),
            'short_text' => $this->faker->text(130),
            'image' => $this->faker->image('public/img/news/',640,480, null, false),
            'user_id' => $redactors->random()->id,
            'created_at' => $date,
            'updated_at' => $date
        ];
    }
}
