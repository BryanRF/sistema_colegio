<?php

namespace Database\Seeders;

use App\Models\Certificado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CertificadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Certificado::factory(200)->create();
    }
}
