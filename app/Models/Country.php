<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //la tabla a conectar:
    protected $table = "countries";
    //la clave primaria de esa tabla
    //En $primaryKey la "K"  tiene que ser mayuscula
    protected $primaryKey = "country_id";
    //Omitir los campos de auditoria
    public $timestamps = false;
    use HasFactory;
}
