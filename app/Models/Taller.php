<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taller extends Model
{
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    protected $table ='talleres';
    protected $guarded =[];
    use HasFactory;
    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class);
    }

    public function certificados()
    {
        return $this->belongsToMany(Certificado::class);
    }
}
