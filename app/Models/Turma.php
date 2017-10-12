<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $table = 'turmas';
    protected $primaryKey = 'ID_TURMA_TUR';
    protected $fillable = ['ST_TURMA_TUR', 'ID_PROFESSOR_PRO'];

    /**
     * Retorna o professor da turma.
     *
     * @return \App\Models\Professor
     */
    public function getProfessor()
    {
        return $this->belongsTo(Professor::class);
    }
}
