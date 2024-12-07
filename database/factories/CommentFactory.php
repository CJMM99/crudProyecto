<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\User; // Usuario que crea el comentario
use App\Models\Project; // Proyecto asociado al comentario
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition()
    {
        return [
            'contenido' => $this->faker->sentence,
            'usuario_id' => User::factory(), // Usuario que realiza el comentario
            'project_id' => Project::factory(), // Proyecto al que corresponde el comentario
        ];
    }
}

