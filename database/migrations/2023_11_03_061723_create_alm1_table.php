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
        Schema::create('alm1', function (Blueprint $table) {
            $table->id();
            $table->text('cod_form');
            $table->foreignId('user_id');
            $table->foreignId('region_id');
            $table->foreignId('provincia_id');
            $table->foreignId('distrito_id');
            $table->foreignId('ugel_id');
            $table->foreignId('iedu_id');
            $table->string('es_name');
            $table->string('es_lastname');
            $table->string('dr_lastname');
            $table->string('dr_name');
            $table->char('dr_telf', 9)->unique();
            $table->string('doc_lastname');
            $table->string('doc_name');
            $table->char('doc_telf', 9)->unique();
            $table->char('estd_ma');
            $table->char('estd_as');
            $table->char('estd_tr');
            $table->char('estd_total');
            $table->foreignId('grado_id');
            $table->foreignId('turno_id');
            $table->foreignId('seccion_id');
            $table->date('fecha');
            $table->time('hrInicio');
            $table->time('hrFin');
            $table->char('state', 1)->default('1');

            /* Recepcion y distribucion de materiales educativos */
            $table->boolean('rmaed_pre1');
            $table->text('rmaed_coment_pre1')->nullable();
            $table->boolean('rmaed_pre2');
            $table->text('rmaed_coment_pre2')->nullable();
            $table->boolean('rmaed_pre3');
            $table->text('rmaed_coment_pre3')->nullable();
            $table->boolean('rmaed_pre4');
            $table->text('rmaed_coment_pre4')->nullable();
            $table->boolean('rmaed_pre5');
            $table->text('rmaed_coment_pre5')->nullable();
            $table->boolean('rmaed_pre6');
            $table->text('rmaed_coment_pre6')->nullable();
            $table->boolean('rmaed_pre7');
            $table->text('rmaed_coment_pre7')->nullable();
            $table->boolean('rmaed_pre8');
            $table->text('rmaed_coment_pre8')->nullable();
            $table->boolean('rmaed_pre9');
            $table->text('rmaed_coment_pre9')->nullable();
            $table->boolean('rmaed_pre10');
            $table->text('rmaed_coment_pre10')->nullable();
            $table->boolean('rmaed_pre11');
            $table->text('rmaed_coment_pre11')->nullable();
            $table->boolean('rmaed_pre12');
            $table->text('rmaed_coment_pre12')->nullable();
            $table->boolean('rmaed_pre13');
            $table->text('rmaed_coment_pre13')->nullable();
            $table->boolean('rmaed_pre14');
            $table->text('rmaed_coment_pre14')->nullable();
            $table->boolean('rmaed_pre15');
            $table->text('rmaed_coment_pre15')->nullable();
            $table->boolean('rmaed_pre16');
            $table->text('rmaed_coment_pre16')->nullable();
            $table->boolean('rmaed_pre17');
            $table->text('rmaed_coment_pre17')->nullable();
            $table->boolean('rmaed_pre18');
            $table->text('rmaed_coment_pre18')->nullable();
            $table->boolean('rmaed_pre19');
            $table->text('rmaed_coment_pre19')->nullable();
            $table->boolean('rmaed_pre20');
            $table->text('rmaed_coment_pre20')->nullable();
            $table->boolean('rmaed_pre21');
            $table->text('rmaed_coment_pre21')->nullable();

            /* Analisis de programaciones curriculares anuales de la unidad */
            $table->boolean('apr_pre1');
            $table->text('apr_coment_pre1')->nullable();
            $table->boolean('apr_pre2');
            $table->text('apr_coment_pre2')->nullable();
            $table->boolean('apr_pre3');
            $table->text('apr_coment_pre3')->nullable();

            /* Analisis de las sesiones de aprendizaje */
            $table->boolean('ase_pre1');
            $table->text('ase_coment_pre1')->nullable();
            $table->boolean('ase_pre2');
            $table->text('ase_coment_pre2')->nullable();
            $table->boolean('ase_pre3');
            $table->text('ase_coment_pre3')->nullable();
            $table->boolean('ase_pre4');
            $table->text('ase_coment_pre4')->nullable();
            $table->boolean('ase_pre5');
            $table->text('ase_coment_pre5')->nullable();
            $table->boolean('ase_pre6');
            $table->text('ase_coment_pre6')->nullable();
            $table->text('rec_cmejora')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alm1');
    }
};
