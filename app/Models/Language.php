<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    //la tabla a conectar:
    protected $table = "languages";
    //la clave primaria de esa tabla
    //En $primaryKey la "K"  tiene que ser mayuscula
    protected $primaryKey = "language_id";
    //Omitir los campos de auditoria
    public $timestamps = false;
    use HasFactory;

    //relacion de m a m con paises
    public function paises(){
        return $this->belongsToMany(Country::class,'country_languages','language_id','country_id'); 
    }

}
