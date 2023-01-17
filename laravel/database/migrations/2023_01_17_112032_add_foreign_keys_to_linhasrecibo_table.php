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
        Schema::table('linhasrecibo', function (Blueprint $table) {
            $table->foreign(['idRecibo'], 'linhasrecibo_ibfk_1')->references(['id'])->on('recibos');
            $table->foreign(['idFatura'], 'linhasrecibo_ibfk_2')->references(['id'])->on('faturas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('linhasrecibo', function (Blueprint $table) {
            $table->dropForeign('linhasrecibo_ibfk_1');
            $table->dropForeign('linhasrecibo_ibfk_2');
        });
    }
};
