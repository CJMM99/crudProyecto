<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Project;
use App\Models\File;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Crear 10 usuarios (5 estudiantes, 5 profesores)
        User::factory(5)->create(['rol' => 'estudiante']);
        User::factory(5)->create(['rol' => 'profesor']);

        // Crear 5 proyectos
        Project::factory(5)->create();

        // Crear 10 archivos para los proyectos
        File::factory(10)->create();

        // Crear 15 comentarios para los proyectos
        Comment::factory(15)->create();
    }
}
