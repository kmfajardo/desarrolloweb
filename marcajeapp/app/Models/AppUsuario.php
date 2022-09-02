<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppUsuario extends Model
{
    use HasFactory;
    protected $fillable = ['nombre_user','usuario_pass','id_emp','id_rol'];
}
