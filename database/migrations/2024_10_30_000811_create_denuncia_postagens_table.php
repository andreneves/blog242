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
        Schema::create('denuncia_postagens', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('postagem_id');
            $table->bigInteger('user_id');
            $table->text('conteudo');
            $table->enum('status', ['AGUARDANDO', 'ACEITA', 'NEGADA'])->default('AGUARDANDO');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('denuncia_postagens');
    }
};
