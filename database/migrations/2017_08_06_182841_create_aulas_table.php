<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aulas', function (Blueprint $table) {
            $table->increments('ID_AULA_AUL');
            $table->string('ST_AULA_AUL', 50);
            $table->integer('ID_PROFESSOR_PRO')->unsigned();
            $table->foreign('ID_PROFESSOR_PRO')->references('ID_PROFESSOR_PRO')->on('professores');
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
        Schema::dropIfExists('aulas');
    }
}
