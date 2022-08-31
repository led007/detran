<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChamadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chamados', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('chamado', 100);
            $table->enum('indicador1', 
            ['Requisição', 
            'Interação',
            'Feedback',
            'Incidente',
            'Monitoria',
            'Treinamento',
            'Reunião',
            'Auditoria'
            ]);
            $table->enum('indicador2', 
            ['Requisição', 
            'Interação',
            'Feedback',
            'Incidente',
            'Monitoria',
            'Treinamento',
            'Reunião',
            'Auditoria'
            ]);
            $table->date('data_abertura');
            $table->date('data_fechamento');
            $table->string('colaborador', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chamados');
    }
}
