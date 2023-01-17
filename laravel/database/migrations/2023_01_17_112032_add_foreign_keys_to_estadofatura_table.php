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
        Schema::table('estadofatura', function (Blueprint $table) {
            $table->foreign(['nFatura'], 'estadofatura_ibfk_1')->references(['id'])->on('faturas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('estadofatura', function (Blueprint $table) {
            $table->dropForeign('estadofatura_ibfk_1');
        });
    }
};
