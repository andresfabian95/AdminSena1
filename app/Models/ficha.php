<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ficha extends Model
{
    use HasFactory;
    protected $table='Ficha';
    protected $primaryKey='id';
    protected $fillable=
        [
           'Num_Ficha','Jornada','Estado','id_Programa','id_instructor'


        ];
}
