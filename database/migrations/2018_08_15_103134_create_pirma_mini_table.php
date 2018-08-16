<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePirmaMiniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pirma_mini', function (Blueprint $table) {
            $table->increments('id');
            $table->string('campino', 191);
            $table->string('suris', 191);
            $table->string('kumpis', 191);
            $table->string('jelopenas', 191);
            $table->string('salsa', 191);
            $table->string('cesnakinis', 191);
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
        Schema::dropIfExists('pirma_mini');
    }
}
