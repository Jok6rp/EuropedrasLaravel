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
        Schema::create('faturas', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('n_Fatura', 50);
            $table->integer('n_Fornecedor')->index('n_Fornecedor');
            $table->decimal('valor', 10)->default(0);
            $table->decimal('iva', 10)->default(0)->virtualAs('`valor` * 0.23');
            $table->decimal('total', 10)->default(0)->virtualAs('`valor` + `iva`');
            $table->date('dataFatura');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faturas');
    }
};
