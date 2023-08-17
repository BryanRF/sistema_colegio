<?php

namespace Database\Seeders;

use App\Models\Taller;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TalleresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $talleres = [
            ['nombre' => 'Taller de Experimentos Científicos', 'fecha' => '2023-09-05', 'estado' => 'Proceso'],
            ['nombre' => 'Taller de Teatro y Actuación', 'fecha' => '2023-09-10', 'estado' => 'Espera'],
            ['nombre' => 'Taller de Reciclaje Creativo', 'fecha' => '2023-09-15', 'estado' => 'Proceso'],
            ['nombre' => 'Taller de Cocina Divertida', 'fecha' => '2023-09-20', 'estado' => 'Proceso'],
            ['nombre' => 'Taller de Ajedrez Estratégico', 'fecha' => '2023-09-25', 'estado' => 'Espera'],
            ['nombre' => 'Taller de Jardinería', 'fecha' => '2023-09-30', 'estado' => 'Proceso'],
            ['nombre' => 'Taller de Robótica Básica', 'fecha' => '2023-10-05', 'estado' => 'Proceso'],
            ['nombre' => 'Taller de Manualidades Eco-Amigables', 'fecha' => '2023-10-10', 'estado' => 'Espera'],
            ['nombre' => 'Taller de Yoga y Relajación', 'fecha' => '2023-10-15', 'estado' => 'Proceso'],
            ['nombre' => 'Taller de Escritura Creativa', 'fecha' => '2023-10-20', 'estado' => 'Proceso'],
            ['nombre' => 'Taller de Pintura al Óleo', 'fecha' => '2023-10-25', 'estado' => 'Espera'],
            ['nombre' => 'Taller de Astronomía', 'fecha' => '2023-11-05', 'estado' => 'Proceso'],
            ['nombre' => 'Taller de Baile Moderno', 'fecha' => '2023-11-10', 'estado' => 'Proceso'],
            ['nombre' => 'Taller de Ciencia Divertida', 'fecha' => '2023-11-15', 'estado' => 'Espera'],
            ['nombre' => 'Taller de Fotografía Creativa', 'fecha' => '2023-11-20', 'estado' => 'Proceso'],
            ['nombre' => 'Taller de Origami', 'fecha' => '2023-11-25', 'estado' => 'Proceso'],
            ['nombre' => 'Taller de Baile Folklórico', 'fecha' => '2023-12-05', 'estado' => 'Espera'],
            ['nombre' => 'Taller de Cocina Internacional', 'fecha' => '2023-12-10', 'estado' => 'Proceso'],
            ['nombre' => 'Taller de Medio Ambiente', 'fecha' => '2023-12-15', 'estado' => 'Proceso'],
            ['nombre' => 'Taller de Ajedrez Avanzado', 'fecha' => '2023-12-20', 'estado' => 'Espera'],
            ['nombre' => 'Taller de Danzas Tradicionales', 'fecha' => '2023-12-25', 'estado' => 'Proceso'],
            ['nombre' => 'Taller de Ciencia en Casa', 'fecha' => '2024-01-05', 'estado' => 'Proceso'],
            ['nombre' => 'Taller de Tejido y Costura', 'fecha' => '2024-01-10', 'estado' => 'Espera'],
            ['nombre' => 'Taller de Escultura', 'fecha' => '2024-01-15', 'estado' => 'Proceso'],
            ['nombre' => 'Taller de Periodismo Escolar', 'fecha' => '2024-01-20', 'estado' => 'Proceso'],
        ];

        foreach ($talleres as $taller) {
            Taller::create($taller);
        }
    }
}
