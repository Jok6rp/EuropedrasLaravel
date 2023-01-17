<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisicoes_gasoleo', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('n_requisicao')->unique('n_requisicao');
            $table->string('matricula', 8);
            $table->float('litros', 10, 0);
            $table->float('preco', 10, 0);
            $table->float('total', 10, 0)->nullable()->virtualAs('`litros` * `preco`');
            $table->string('fatura', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requisicoes_gasoleo');
    }
};
