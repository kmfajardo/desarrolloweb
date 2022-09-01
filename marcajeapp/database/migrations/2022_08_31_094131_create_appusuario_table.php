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
            $table->unsignedBigInteger('id_rol_fk');
            $table->unsignedBigInteger('id_emp_fk');
            $table->timestamps();

            $table->foreign('id_rol_fk')->references('id_rol')-on('roldeusuarios');
            $table->foreign('id_emp_fk')->references('id_emp')-on('empleados');

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
