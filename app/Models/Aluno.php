<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'alunos';
    protected $primaryKey = 'ID_ALUNO_ALU';
    protected $fillable = ['ST_ALUNO_ALU', 'ST_RESPONSAVEL_ALU', 'NM_MATRICULA_ALU', 'DT_NASCIMENTO_ALU'];
}
