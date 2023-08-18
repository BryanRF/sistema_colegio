<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(GradosTableSeeder::class);
        $this->call(AlumnosTableSeeder::class);
        $this->call(CursosTableSeeder::class);
        $this->call(MatriculasTableSeeder::class);
        $this->call(TalleresTableSeeder::class);
        $this->call(CertificadosSeeder::class);


    }
}
