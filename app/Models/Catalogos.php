<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Catalogos extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = ['oficina', 'titular', 'tratamiento', 'cargo', 'prefijo', 'carpeta', 'ur'];
}