<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    public $table='alumnos';
    public $fillabe = [
        'curso_id',
        'nombre',
        'apellido',
        'edad',
        'ci',
        'telefono',
        'direccion',
        'gmail',
        'profesion',
        'genero',
        'fechanac'


    ];

    public function curso(){
        return $this->hasOne(Curso::class, 'id','curso_id');   
    } 
}
