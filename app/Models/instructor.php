<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class instructor extends Model
{
    use HasFactory;
    protected $table='instructor';
    protected $primaryKey='id';
    protected $fillable=
        [
            'Nombres','Apellidos','Documento','id_ficha'
        ];
}
