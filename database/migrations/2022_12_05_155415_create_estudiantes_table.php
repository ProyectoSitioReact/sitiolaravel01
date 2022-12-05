<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->string('codest', 5);
            $table->string('nomEst', 30);
            $table->string('apeEst', 30);
            $table->date('fnaEst', 30);
            $table->integer('turmat', 10);
            $table->integer('semMat', 10);
            $table->integer('estMat', 10);

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
        Schema::dropIfExists('estudiantes');
    }
};
