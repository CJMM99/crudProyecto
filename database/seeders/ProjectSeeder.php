<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        // Creamos 5 proyectos con estudiantes y profesores aleatorios
        Project::factory(5)->create();
    }
}
