<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Tabla con la que debe conectarse, por defecto es mismo nombre en plural (ingles !!ATENCION¡¡)
    protected $table = 'posts';
}
