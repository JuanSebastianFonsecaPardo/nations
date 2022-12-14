<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    //la tabla a conectar:
    protected $table = "continents";
    //la clave primaria de esa tabla
    //En $primaryKey la "K"  tiene que ser mayuscula
    protected $primaryKey = "continent_id";
    //Omitir los campos de auditoria
    public $timestamps = false;
    use HasFactory;

    //relacion entre continente y region
    public function regiones(){
        return $this->hasMany(Region::class,'continent_id');
    }

    //relacion entre continente y paises
    public function paises(){
        return $this->hasManyThrough(Region::class,
                                     Country::class,
                                     'continent_id',
                                     'region_id');
    }
}