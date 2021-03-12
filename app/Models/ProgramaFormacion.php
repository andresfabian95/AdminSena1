<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramaFormacion extends Model
{
    use HasFactory;
    protected $table='_Programa_formacion';
    protected $primaryKey='id';
    protected $fillable=
        [
            'Codigo','Nombre','Sigla'
        ];

}
