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
        Schema::create('appusuarios', function (Blueprint $table) {
            //The bigIncrements method creates an auto-incrementing UNSIGNED BIGINT (primary key) equivalent column:
            //The integer method creates an INTEGER equivalent column:

            $table->bigIncrements('id_user');
            $table->string('nombre_user');
            $table->string('usuario_pass');
            $table->unsignedBigInteger('id_emp');
            $table->unsignedBigInteger('id_rol');
            $table->timestamps();

            $table->foreign('id_emp')->references('id_emp')->on('empleados');
            $table->foreign('id_rol')->references('id_rol')->on('roldeusuarios');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appusuarios');
    }
};
