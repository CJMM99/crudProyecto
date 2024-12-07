<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'estado',
        'estudiante_id',
        'profesor_id',
    ];

    // Relación con el modelo User para el estudiante
    public function estudiante()
    {
        return $this->belongsTo(User::class, 'estudiante_id');
    }

    // Relación con el modelo User para el profesor
    public function profesor()
    {
        return $this->belongsTo(User::class, 'profesor_id');
    }
}
