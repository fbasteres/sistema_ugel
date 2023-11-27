<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('form2', function (Blueprint $table) {
            $table->id();
            $table->text('cod_form');
            $table->foreignId('user_id');
            $table->foreignId('region_id');
            $table->foreignId('provincia_id');
            $table->foreignId('distrito_id');
            $table->foreignId('ugel_id');
            $table->foreignId('iedu_id');
            $table->foreignId('carac_id');
            $table->foreignId('grado_id');
            $table->foreignId('seccion_id');
            $table->foreignId('turno_id');
            $table->date('fecha');
            $table->char('nroVisita');
            $table->time('hrInicio');
            $table->time('hrFin');
            $table->string('name');
            $table->string('last_name');
            $table->char('nro_dni');
            $table->foreignId('tipoPro_id');
            $table->char('state', 1)->default('1');

             /*DOMINIO II Enseñanza para el aprendizaje de los estudiantes*/
            $table->integer('ense_pre1');
            $table->text('ense_evidencia_pre1')->nullable();
            $table->integer('ense_pre2');
            $table->text('ense_evidencia_pre2')->nullable();
            $table->integer('ense_pre3');
            $table->text('ense_evidencia_pre3')->nullable();
            $table->integer('ense_pre4');
            $table->text('ense_evidencia_pre4')->nullable();
            $table->integer('ense_pre5');
            $table->text('ense_evidencia_pre5')->nullable();
            $table->integer('ense_pre6');
            $table->text('ense_evidencia_pre6')->nullable();
            $table->integer('ense_pre7');
            $table->text('ense_evidencia_pre7')->nullable();
            $table->integer('ense_pre8');
            $table->text('ense_evidencia_pre8')->nullable();
            $table->integer('ense_pre9');
            $table->text('ense_evidencia_pre9')->nullable();
            $table->integer('ense_pre10');
            $table->text('ense_evidencia_pre10')->nullable();
            $table->integer('ense_pre11');
            $table->text('ense_evidencia_pre11')->nullable();
            $table->integer('ense_pre12');
            $table->text('ense_evidencia_pre12')->nullable();
            $table->integer('ense_pre13');
            $table->text('ense_evidencia_pre13')->nullable();
            $table->integer('ense_pre14');
            $table->text('ense_evidencia_pre14')->nullable();
            $table->integer('ense_pre15');
            $table->text('ense_evidencia_pre15')->nullable();
            $table->integer('ense_resultado');

            $table->text('logros_aciertos')->nullable();
            $table->text('aspectos_mejorar')->nullable();
            $table->text('c_mejora')->nullable();

            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form2');
    }
};
