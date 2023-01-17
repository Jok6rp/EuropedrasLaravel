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
        Schema::create('cheques', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nCheque', 15)->nullable();
            $table->string('fornecedor', 25)->nullable();
            $table->decimal('valor', 10)->nullable();
            $table->date('dataCheque')->nullable();
            $table->string('banco', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cheques');
    }
};
