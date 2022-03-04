<?php

namespace Database\Factories;

use App\Models\Socio;
use Illuminate\Database\Eloquent\Factories\Factory;
use Laragear\Rut\Generator;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Socio>
 */
class SocioFactory extends Factory
{
    protected $model = Socio::class;

    public function definition()
    {
        $rut = (new Generator)->asPeople();
        $faker = $this->faker;

        return [
            'rut' => $rut->makeOne(),
            'apellidos' => $faker->lastName(),
            'nombres' => $faker->firstName(),
            'direccion' => $faker->address() . PHP_EOL . "Pelotillehue",
        ];
    }

    public function deleted(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                (new Socio)->getDeletedAtColumn() => $this->faker->dateTime,
            ];
        });
    }
}
