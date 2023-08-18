<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    protected $guarded =[];
    use HasFactory;
    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }

    public function grado()
    {
        return $this->belongsTo(Grado::class);
    }

    public function matriculas()
    {
        return $this->hasMany(Matricula::class);
    }

    // public function certificados()
    // {
    //     return $this->hasMany(Certificado::class);
    // }
    public function certificados()
    {
        return $this->belongsToMany(Certificado::class);
    }
}
