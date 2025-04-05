<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = Contact::class;

    public function definition()
    {
        return [
            'last_name' => $this->faker->lastName,
            'first_name' => $this->faker->firstName,
            'gender' => $this->faker->randomElement(['1', '2', '3']),
            'email' => $this->faker->unique()->safeEmail,
            'tel' => $this->faker->numerify('##########'),
            'address' => $this->faker->address,
            'category_id' => Category::inRandomOrder()->first()->id ?? 1,
            'detail' => $this->faker->text(100),
            'created_at' => now(),
            'updated_at' => now(),

        ];
    }
}
