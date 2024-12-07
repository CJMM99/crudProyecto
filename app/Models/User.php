<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    // Relación inversa con los proyectos como estudiante
    public function projectsAsStudent()
    {
        return $this->hasMany(Project::class, 'estudiante_id');
    }

    // Relación inversa con los proyectos como profesor
    public function projectsAsProfessor()
    {
        return $this->hasMany(Project::class, 'profesor_id');
    }
}
