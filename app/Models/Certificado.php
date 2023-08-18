<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    protected $guarded =[];
    use HasFactory;
    public function alumno()
    {
        return $this->belongsTo(Alumno::class);
    }

    public function taller()
    {
        return $this->belongsTo(Taller::class);
    }
}
