<?php

namespace Database\Seeders;

use App\Models\Grado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradosTableSeeder extends Seeder
{
    public function run()
    {
        $niveles = ['primaria', 'secundaria'];

        foreach ($niveles as $nivel) {
            $cantidadGrados = $nivel === 'primaria' ? 6 : 5;

            for ($i = 1; $i <= $cantidadGrados; $i++) {
                Grado::create([
                    'nombre' => $i . '° Grado',
                    'nivel' => $nivel,
                ]);
            }
        }
    }
}