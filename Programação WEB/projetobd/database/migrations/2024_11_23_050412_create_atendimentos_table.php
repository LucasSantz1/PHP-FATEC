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
        Schema::create('atendimentos', function (Blueprint $table) {
            $table->id(); // ID principal da tabela

            // Chaves estrangeiras
            $table->unsignedBigInteger('cliente_id'); // Relaciona com clientes
            $table->unsignedBigInteger('tecnico_id'); // Relaciona com tecnicos
            $table->unsignedBigInteger('tiposchamados_id'); // Relaciona com tiposchamados

            $table->date('data_atendimento'); // Data do atendimento
            $table->timestamps();

            // Configuração das foreign keys
            $table->foreign('cliente_id')
                ->references('id')
                ->on('clientes')
                ->onDelete('restrict');

            $table->foreign('tecnico_id')
                ->references('id')
                ->on('tecnicos')
                ->onDelete('restrict');

            $table->foreign('tiposchamados_id')
                ->references('id')
                ->on('tiposchamados')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Exclui a tabela
        Schema::dropIfExists('atendimentos');
    }
};
