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
        Schema::create('form1', function (Blueprint $table) {
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


            /*Verificacion de la planificacion anual */
            $table->boolean('vpa_pre1');
            $table->text('vpa_coment_pre1')->nullable();
            $table->boolean('vpa_pre2');
            $table->text('vpa_coment_pre2')->nullable();
            $table->boolean('vpa_pre3');
            $table->text('vpa_coment_pre3')->nullable();
            $table->boolean('vpa_pre4');
            $table->text('vpa_coment_pre4')->nullable();
            $table->boolean('vpa_pre5');
            $table->text('vpa_coment_pre5')->nullable();
            $table->boolean('vpa_pre6');
            $table->text('vpa_coment_pre6')->nullable();
            $table->boolean('vpa_pre7');
            $table->text('vpa_coment_pre7')->nullable();
            $table->boolean('vpa_pre8');
            $table->text('vpa_coment_pre8')->nullable();
            $table->boolean('vpa_pre9');
            $table->text('vpa_coment_pre9')->nullable();
            $table->boolean('vpa_pre10');
            $table->text('vpa_coment_pre10')->nullable(); 
            $table->boolean('vpa_pre11');
            $table->text('vpa_coment_pre11')->nullable();
            $table->boolean('vpa_pre12');
            $table->text('vpa_coment_pre12')->nullable();
            $table->boolean('vpa_pre13');
            $table->text('vpa_coment_pre13')->nullable();
            $table->boolean('vpa_pre14');
            $table->text('vpa_coment_pre14')->nullable();
            $table->boolean('vpa_pre15');
            $table->text('vpa_coment_pre15')->nullable();

            /*Verificacion de la Unidad didactica */
            $table->boolean('vud_pre1');
            $table->text('vud_coment_pre1')->nullable();
            $table->boolean('vud_pre2');
            $table->text('vud_coment_pre2')->nullable();
            $table->boolean('vud_pre3');
            $table->text('vud_coment_pre3')->nullable();
            $table->boolean('vud_pre4');
            $table->text('vud_coment_pre4')->nullable();
            $table->boolean('vud_pre5');
            $table->text('vud_coment_pre5')->nullable();
            $table->boolean('vud_pre6');
            $table->text('vud_coment_pre6')->nullable();
            $table->boolean('vud_pre7');
            $table->text('vud_coment_pre7')->nullable();
            $table->boolean('vud_pre8');
            $table->text('vud_coment_pre8')->nullable();
            $table->boolean('vud_pre9');
            $table->text('vud_coment_pre9')->nullable();
            $table->boolean('vud_pre10');
            $table->text('vud_coment_pre10')->nullable();
            $table->boolean('vud_pre11');
            $table->text('vud_coment_pre11')->nullable();
            $table->boolean('vud_pre12');
            $table->text('vud_coment_pre12')->nullable();
            $table->boolean('vud_pre13');
            $table->text('vud_coment_pre13')->nullable();
            $table->boolean('vud_pre14');
            $table->text('vud_coment_pre14')->nullable();
            $table->boolean('vud_pre15');
            $table->text('vud_coment_pre15')->nullable();
            $table->text('obs')->nullable();
            $table->text('recomend')->nullable();
            $table->text('cmejora')->nullable();
            $table->text('rsta_1')->nullable();
            $table->text('rsta_2')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form1');
    }
};
