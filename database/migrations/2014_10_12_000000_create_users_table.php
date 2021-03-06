<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Usuarios', function (Blueprint $table) {
            $table->bigIncrements('Clave');
            $table->bigInteger('Clave_Compania');
            $table->string('Iniciales', 10);
            $table->string('Nombres', 150);
            $table->string('Correo', 50)->unique();
            $table->bigInteger('Clave_Area')->nullable();
            $table->bigInteger('Clave_Puesto')->nullable();
            $table->bigInteger('Clave_Rol');
            $table->string('Contrasena', 250);
            $table->dateTime('UltimoLogin')->nullable();
            $table->dateTime('FechaCreacion');
            $table->tinyInteger('Activo');
            $table->rememberToken();
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
        Schema::dropIfExists('Usuarios');
    }
}
