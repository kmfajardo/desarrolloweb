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
        Schema::create('empleados', function (Blueprint $table) {
            //The bigIncrements method creates an auto-incrementing UNSIGNED BIGINT (primary key) equivalent column:

            $table->bigIncrements('id_emp');
            $table->string('name_emp');
            $table->string('apellido_emp');
            $table->string('dpi_emp');            
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
        Schema::dropIfExists('empleados');
    }
};
