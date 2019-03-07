<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('age');
            $table->integer('sex');
            $table->integer('bp');
            $table->integer('cp');
            $table->integer('chol');
            $table->integer('fbs');
            $table->integer('ecg');
            $table->decimal('oldpeak',8,2);
            $table->integer('thalach');
            $table->integer('exang');
            $table->integer('ca');
            $table->integer('slop');
            $table->integer('thal');
            $table->integer('result');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users'); 
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
        Schema::dropIfExists('tests');
    }
}
