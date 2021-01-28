<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('react.users', function (Blueprint $table) {
            $table->id();
            $table->string('ci')->nullable();
            $table->string('ru')->nullable();
            $table->date('f_nac');
            $table->string('name');
            $table->bigInteger('institucion_id')->default(0);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('verification_code')->nullable();
            $table->integer('is_verified')->default(0);
            $table->enum('estado',['activo','inactivo'])->default('activo');
            $table->enum('tipo',['estudiante','docente', 'tercero'])->default('tercero');
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
        Schema::dropIfExists('react.users');
    }
}
