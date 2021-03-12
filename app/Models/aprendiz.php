<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aprendiz extends Model
{
    use HasFactory;

    protected $table='aprendiz';
    protected $primaryKey='id';
    protected $fillable=
        [
            'Nombre','Apellido','Tip_documento','Documento','Correo','Fecha_nac','Genero','id_ficha'
        ];
}
