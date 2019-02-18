<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignAccumulationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foreign_accumulations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('saham')->nullable();
            $table->string('datetime')->nullable();
            $table->string('close')->nullable();
            $table->string('volume')->nullable();
            $table->string('change')->nullable();
            $table->string('foreign_today')->nullable();
            $table->string('foreign_weekly')->nullable();
            $table->string('foreign_monthly')->nullable();
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
        Schema::dropIfExists('foreign_accumulations');
    }
}
