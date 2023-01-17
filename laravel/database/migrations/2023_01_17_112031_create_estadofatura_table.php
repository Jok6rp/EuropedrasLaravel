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
        Schema::create('estadofatura', function (Blueprint $table) {
            $table->integer('nFatura')->index('nFatura');
            $table->string('estado', 50)->nullable()->default('pendente');
            $table->decimal('valorPendente', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estadofatura');
    }
};
