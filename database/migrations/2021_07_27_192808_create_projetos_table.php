<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projetos', function (Blueprint $table) {
            $table->id();

            $table->string('nome_projeto');
            $table->string('utm_campaign');
            $table->string('tipo_lancamento');

            $table->date('data_inicio');
            $table->date('data_fim');

            $table->decimal('projecao_investimento_trafego', 10, 2);
            $table->integer('projecao_captacao_leads');
            $table->integer('projecao_grupo_whatsapp');

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
        Schema::dropIfExists('projetos');
    }
}
