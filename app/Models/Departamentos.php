<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Departamentos extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = ['departamento', 'nombre_titular', 'tratamiento_titular', 'cargo_titular', 'prefijo', 'carpeta', 'ur'];
}
