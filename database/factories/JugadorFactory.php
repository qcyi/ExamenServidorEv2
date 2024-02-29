<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jugador>
 */
class JugadorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "dni" => $this->dni(),
            "nombre" => fake()->name(),
            "email" => fake()->email(),
            "nick" => fake()->firstName(),
            "password" => fake()->password()
        ];
    }

    private function dni()
    {
        $letras = "TRWAGMYFPDXBNJZSQVHLCKE";
        $num_dni = fake()->randomNumber(8, true);
        $letra = $letras[$num_dni%23];
        $dni="$num_dni-$letra";
        return $dni;
    }
}
