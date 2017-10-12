<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    protected $table = 'aulas';
    protected $primaryKey = 'ID_AULA_AUL';
    protected $fillable = ['ST_AULA_AUL', 'ID_PROFESSOR_PRO'];
}
