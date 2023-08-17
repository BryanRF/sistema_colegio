<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taller extends Model
{
    protected $table ='talleres';
    protected $guarded =[];
    use HasFactory;
}
