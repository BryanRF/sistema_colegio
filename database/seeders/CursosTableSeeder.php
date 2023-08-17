<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\Grado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursosTableSeeder extends Seeder
{
    public function run()
    {
        $cursoGrado = [
            "1° Grado" => ["Matemáticas", "Comunicación", "Ciencia y Ambiente", "Personal Social", "Educación Física", "Arte"],
            "2° Grado" => ["Matemáticas", "Comunicación", "Ciencia y Ambiente", "Personal Social", "Educación Física", "Arte"],
            "3° Grado" => ["Matemáticas", "Comunicación", "Ciencia y Ambiente", "Personal Social", "Educación Física", "Arte"],
            "4° Grado" => ["Matemáticas", "Comunicación", "Ciencia y Ambiente", "Personal Social", "Educación Física", "Arte"],
            "5° Grado" => ["Matemáticas", "Comunicación", "Ciencia y Ambiente", "Personal Social", "Educación Física", "Arte", "Formación Ciudadana y Cívica"],
            "6° Grado" => ["Matemáticas", "Comunicación", "Ciencia y Tecnología", "Personal Social", "Educación Física", "Arte", "Formación Ciudadana y Cívica"]
        ];

        $cursoGradoSecundaria = [
            "1° Grado" => ["Comunicación", "Matemáticas", "Historia, Geografía y Economía", "Ciencia, Tecnología y Ambiente", "Formación Ciudadana y Cívica", "Educación para el Trabajo"],
            "2° Grado" => ["Comunicación", "Matemáticas", "Historia, Geografía y Economía", "Ciencia, Tecnología y Ambiente", "Formación Ciudadana y Cívica", "Educación para el Trabajo"],
            "3° Grado" => ["Comunicación", "Matemáticas", "Historia, Geografía y Economía", "Ciencia, Tecnología y Ambiente", "Formación Ciudadana y Cívica", "Educación para el Trabajo"],
            "4° Grado" => ["Comunicación", "Matemáticas", "Historia, Geografía y Economía", "Ciencia, Tecnología y Ambiente", "Formación Ciudadana y Cívica", "Educación para el Trabajo"],
            "5° Grado" => ["Comunicación", "Matemáticas", "Historia, Geografía y Economía", "Ciencia, Tecnología y Ambiente", "Formación Ciudadana y Cívica", "Educación para el Trabajo"]
        ];

        $cursos = [];

        foreach ($cursoGrado as $grado => $cursosArray) {
            $gradoId = Grado::where('nombre', $grado)->first()->id;
            foreach ($cursosArray as $curso) {
                $cursos[] = [
                    'nombre' => $curso,
                    'grado_id' => $gradoId,
                ];
            }
        }

        foreach ($cursoGradoSecundaria as $grado => $cursosArray) {
            $gradoId = Grado::where('nombre', $grado)->first()->id;
            foreach ($cursosArray as $curso) {
                $cursos[] = [
                    'nombre' => $curso,
                    'grado_id' => $gradoId,
                ];
            }
        }

        foreach ($cursos as $curso) {
            Curso::create($curso);
        }
    }
}
