<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamados extends Model
{
    use HasFactory;

    protected $fillable = [

        'chamado',
        'indicador1',
        'indicador2',
        'data_abertura',
        'data_fechamento',
        'colaborador',
        'bairro',
        'obs'
    ];
}
