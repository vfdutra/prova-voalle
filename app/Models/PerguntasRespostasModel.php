<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerguntasRespostasModel extends Model
{
    use HasFactory;

    protected $table = 'perguntas_respostas';

    protected $primaryKey = 'id_pergunta_resposta';

    protected $fillable = [
        'pergunta',
        'resposta',
        'valor',
    ];

    public $timestamps = false;
}
