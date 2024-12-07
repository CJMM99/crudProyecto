<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\User; // Importamos el modelo User si lo necesitamos para relacionar
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence,
            'descripcion' => $this->faker->paragraph,
            'estudiante_id' => User::factory()->create()->id, // Crear un estudiante y asignar su ID
            'profesor_id' => User::factory()->create()->id, // Crear un profesor y asignar su ID
            'estado' => $this->faker->randomElement(['activo', 'completado']),
        ];
    }
}






