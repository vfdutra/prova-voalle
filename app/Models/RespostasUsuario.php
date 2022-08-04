<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RespostasUsuario extends Model
{
    use HasFactory;

    protected $table = 'respostas_usuario';

    protected $primaryKey = 'id_resposta_usuario';

    protected $fillable = [
        'id_usuario',
        'resposta_1',
        'resposta_2',
        'resposta_3',
    ];

    public $timestamps = false;
}
