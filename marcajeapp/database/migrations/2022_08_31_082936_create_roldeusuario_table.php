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
        Schema::create('roldeusuarios', function (Blueprint $table) {
            //The bigIncrements method creates an auto-incrementing UNSIGNED BIGINT (primary key) equivalent column:

            $table->bigIncrements('id_rol');
            $table->string('user_rol_name');
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
        Schema::dropIfExists('roldeusuarios');
    }
};
