<?php

namespace Database\Factories;

use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{



    protected $model=Person::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */




    public function definition()
    {
        return [
            'fullname' => $this->faker->name(),
            'job_title' => $this->faker->word(),
            'job_status' => 'better_job',
            'email' => $this->faker->email(),
            'phone' => $this->faker->phoneNumber(),
            'province' => $this->faker->word(),
            'address' => $this->faker->word(),
            'married' => 0,
            'birth_year' => '1371',
            'gender' => 'male',
            'military_service_status' => 'moafdaem',
            'about_me' => $this->faker->sentence(25),
            'skills' => 'laravel,php,vuejs,jquery,javascript,html,css',
            
        ];
    }
}
