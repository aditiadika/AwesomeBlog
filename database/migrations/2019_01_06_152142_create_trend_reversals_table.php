<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrendReversalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trend_reversals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('saham')->nullable();
            $table->string('datetime')->nullable();
            $table->string('close')->nullable();
            $table->string('change')->nullable();
            $table->string('volume')->nullable();
            $table->string('condition')->nullable();
            $table->string('bandarmology')->nullable();
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
        Schema::dropIfExists('trend_reversals');
    }
}
