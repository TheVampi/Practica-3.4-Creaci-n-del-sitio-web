<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fruta extends Model
{
    use HasFactory;
    
    //Necesario para la operacion de creacion de registro puesto que indica que campos son requeridos
    protected $fillable = ['nombre', 'temporada', 'precio', 'stock'];
}
