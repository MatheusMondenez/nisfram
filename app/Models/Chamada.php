<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chamada extends Model
{
    protected $table = 'chamadas';
    protected $primaryKey = 'ID_CHAMADA_CHA';
    protected $fillable = ['DT_CHAMADA_CHA', 'ID_TURMA_TUR'];
}
