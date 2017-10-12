<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TurmaAluno extends Model
{
    protected $table = 'turma_alunos';
    // protected $primaryKey = ['ID_TURMA_TUR', 'ID_ALUNO_ALU'];
    protected $fillable = ['ID_TURMA_TUR', 'ID_ALUNO_ALU'];
}
