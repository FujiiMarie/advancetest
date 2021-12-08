<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = Contact::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullname' => $this->faker->name,
            'gender' => $this->faker->boolean(),
            'email' =>$this->faker->unique()->safeEmail,
            'postcode' =>$this->faker->postcode,
            'address' =>$this->faker->address,
            'opinion' =>$this->faker->realText(),
        ];
    }
}
