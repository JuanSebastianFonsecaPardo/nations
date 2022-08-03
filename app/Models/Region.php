<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //la tabla a conectar:
    protected $table = "regions";
    //la clave primaria de esa tabla
    //En $primaryKey la "K"  tiene que ser mayuscula
    protected $primaryKey = "region_id";
    //Omitir los campos de auditoria
    public $timestamps = false;
    use HasFactory;

    //relacion entre region y paises
    public function paises(){
        return $this->hasMany(Country::class,'region_id');
    }
    //Relacion entre region y continente
    public function continente(){
        return $this->belongsTo(Continent::class,'continen_id');
    }
}
