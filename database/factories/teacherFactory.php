<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\teacher>
 */
class teacherFactory extends Factory
{
    protected static ?string $password;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fullname' => fake()->name(),
            'dateofbirth' => fake()->date('Y-m-d'),
            'gender' => fake()->randomElement(['Male', 'Female', 'Non-binary']),
            'email' => fake()->unique()->safeEmail(),
            'phonenumber' => fake()->phoneNumber(),
            'address' => fake()->address(),
            'employeeid' => fake()->unique()->bothify('T-####'),
            'password' => static::$password ??= Hash::make('password'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }
}
