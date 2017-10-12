<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('ID_ALUNO_ALU');
            $table->string('ST_ALUNO_ALU', 100);
            $table->string('ST_RESPONSAVEL_ALU', 100);
            $table->integer('NM_MATRICULA_ALU');
            $table->date('DT_NASCIMENTO_ALU')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
