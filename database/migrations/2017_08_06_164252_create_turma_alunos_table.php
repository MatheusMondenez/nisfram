<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurmaAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turma_alunos', function (Blueprint $table) {
            $table->integer('ID_TURMA_TUR')->unsigned();
            $table->foreign('ID_TURMA_TUR')->references('ID_TURMA_TUR')->on('turmas');
            $table->integer('ID_ALUNO_ALU')->unsigned();
            $table->foreign('ID_ALUNO_ALU')->references('ID_ALUNO_ALU')->on('alunos');
            $table->primary(['ID_TURMA_TUR', 'ID_ALUNO_ALU']);
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
        Schema::dropIfExists('turma_alunos');
    }
}
