<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $guarded =[];
    use HasFactory;
    public function grado()
    {
        return $this->belongsTo(Grado::class);
    }
    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }
}
