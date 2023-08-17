<?php

namespace Database\Factories;

use App\Models\Alumno;
use App\Models\Grado;
use App\Models\Matricula;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matricula>
 */
class MatriculaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Matricula::class;

    public function definition(): array
    {

            return [
                'alumno_id' => $this->faker->randomElement(Alumno::pluck('id')),
                'grado_id' => $this->faker->randomElement(Grado::pluck('id')),
                'anio' => date('Y'),
                'turno' => $this->faker->randomElement(['Mañana', 'Tarde']),
                'ciclo_modalidad' => $this->faker->randomElement(['Ciclo Regular', 'Modalidad Flexible']),
                'numero_matricula' => $this->faker->numberBetween(1, 3),
                'fecha_ingreso' => $this->faker->dateTimeThisYear,
                'fecha_egreso' => $this->faker->dateTimeThisYear,
                'estado' => $this->faker->randomElement(['Proceso', 'Desaprobado', 'Aprobado']),
                'activo' => $this->faker->boolean(90),
            ];

    }
}
