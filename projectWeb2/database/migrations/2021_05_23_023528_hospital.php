<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Hospital extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamp('fecha_reg')->useCurrent = true;
        });

        Schema::create('medico', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('tipo_sangre');
            $table->string('experiencia_a');
            $table->date('fecha_nacimiento');
            $table->foreignId('hospital_id');
            $table->timestamp('fecha_reg')->useCurrent = true;
        });

        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('identificacion');
            $table->string('eps_asociada');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('nombre_ayudante');
            $table->string('telefono_ayudante');
            $table->integer('antecedentes');
            $table->text('antecedentes_texto')->nullable();
            $table->string('motivo_consulta')->default("Consulta Covid");
            $table->string('diagnostico_doctor')->nullable();
            $table->timestamp('fecha_reg')->useCurrent = true;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('hospital');
        Schema::drop('medico');
        Schema::drop('cliente');
    }
}
