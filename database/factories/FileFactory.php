<?php

namespace Database\Factories;

use App\Models\File;
use App\Models\Project; // Para asociar el archivo con un proyecto
use Illuminate\Database\Eloquent\Factories\Factory;

class FileFactory extends Factory
{
    protected $model = File::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
            'ruta' => $this->faker->filePath(), // Puedes personalizar esto para tu ruta de archivos
            'project_id' => Project::factory(), // Relacionamos el archivo con un proyecto
        ];
    }
}
