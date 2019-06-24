<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    protected $fillable = [
            'solicitacao',
            'usuario_id',
            'categoria_id'
        ];
}
