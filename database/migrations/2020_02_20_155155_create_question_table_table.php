<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_table', function (Blueprint $table) {
            $table->bigIncrements('question_id');
            $table->MEDIUMTEXT('question1');
            $table->string('a1');
            $table->string('b1');
            $table->string('c1');
            $table->string('d1'); 
            $table->MEDIUMTEXT('question2');
            $table->string('a2');
            $table->string('b2');
            $table->string('c2');
            $table->string('d2');
            $table->MEDIUMTEXT('question3');
            $table->string('a3');
            $table->string('b3');
            $table->string('c3');
            $table->string('d3');
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
        Schema::dropIfExists('question_table');
    }
}
