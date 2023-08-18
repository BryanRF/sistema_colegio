<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    protected $guarded =[];
    use HasFactory;
    public function grado()
    {
        return $this->belongsTo(Grado::class);
    }
}
