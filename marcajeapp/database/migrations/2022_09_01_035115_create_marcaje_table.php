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
        Schema::create('marcajes', function (Blueprint $table) {
            $table->bigIncrements('id_marcaje');
            $table->unsignedBigInteger('id_emp');
            $table->boolean('marcacion');
            $table->date('fecha_marcaje');
            $table->time('hora_marcaje');
            $table->timestamps();

            $table->foreign('id_emp')->references('id_emp')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marcajes');
    }
};
