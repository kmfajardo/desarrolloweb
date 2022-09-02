<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marcaje extends Model
{
    use HasFactory;
    protected $fillable =['id_emp', 'marcacion', 'fecha_marcaje', 'hora_marcaje'];
}
