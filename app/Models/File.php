<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    
    protected $fillable = ['nombre', 'ruta', 'project_id'];

    // Relación con proyecto
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}