<?php

namespace Database\Factories;

use App\Models\Grado;
use App\Models\Persona;
use App\Models\Alumno;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Alumno::class;
    public function definition(): array
    {

        return [
            'persona_id' => function () {
                return Persona::factory()->create()->id;
            },
            'estado' => $this->faker->boolean,
            'grado_id' => function () {
                return Grado::pluck('id')->random();
            },
        ];
    }
}
