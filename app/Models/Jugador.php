<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;
    protected $table = "jugadores";
    protected $fillable = ['dni', 'nombre', 'email', 'nick', 'password'];
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = "dni";
    protected $keyType = "string";
}
