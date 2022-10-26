<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    protected $table = "comentario";
    protected $guarded = ['id'];
    protected $fillable = ['nombre_cliente', 'telefono', 'correo', 'comentario', 'fecha'];
}
