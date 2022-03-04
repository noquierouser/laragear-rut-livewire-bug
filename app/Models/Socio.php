<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laragear\Rut\HasRut;

class Socio extends Model
{
    use SoftDeletes,
        HasFactory,
        HasRut;

    protected $fillable = [
        'rut',
        'apellidos',
        'nombres',
        'direccion'
    ];
}
