<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    use HasFactory;

    protected $table = 'solicitacoes';

    protected $fillable = [
        'profissional_id',
        'specialty_id',
        'name',
        'cpf',
        'source_id',
        'birthdate',
    ];
}
