<?php

namespace Database\Factories;

use App\Models\Alumno;
use App\Models\Taller;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Certificado;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Certificado>
 */
class CertificadoFactory extends Factory
{
    protected $model = Certificado::class;

    public function definition()
    {
        $alumnoIds = Alumno::pluck('id');
        $tallerIds = Taller::pluck('id');

        return [
            'alumno_id' => $this->faker->randomElement($alumnoIds),
            'taller_id' => $this->faker->randomElement($tallerIds),
            'estado' => $this->faker->boolean(),
            // Otros campos relevantes para certificados
        ];
    }
}

