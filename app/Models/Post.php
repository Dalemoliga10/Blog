<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Tabla con la que debe conectarse, por defecto es mismo nombre en plural (ingles !!ATENCION¡¡)
    //protected $table = 'posts';

    protected function title(): Attribute{
        return Attribute::make(
            //Al poner
            set: function($value){
                return strtolower($value); //Pasar a todo minuscula

            },
            //AL obtener de la bd
            get: function($value){
                return ucfirst($value);
            }
        );
    }
}
