<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class pesertaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */


    public function definition()
    {

        $characters = 'pl';
        $randomChar = $characters[rand(0, strlen($characters) - 1)];

        $randomint = rand(10,20);

        return [
                'name' => $this -> faker ->name(),
                'jenis_kelamin' => $randomChar ,
                'umur' => $randomint,

        ];
    }




}

