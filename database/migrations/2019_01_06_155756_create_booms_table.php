<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('saham')->nullable();
            $table->string('datetime')->nullable();
            $table->string('close')->nullable();
            $table->string('volume')->nullable();
            $table->string('change')->nullable();
            $table->string('break')->nullable();
            $table->string('resistance_level')->nullable();
            $table->string('secure')->nullable();
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
        Schema::dropIfExists('booms');
    }
}
