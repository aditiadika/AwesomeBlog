<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRangkingVolumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rangking_volumes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('saham')->nullable();
            $table->string('datetime')->nullable();
            $table->string('ranking_volume')->nullable();
            $table->string('close')->nullable();
            $table->string('change')->nullable();
            $table->string('buy_volume')->nullable();
            $table->string('sell_volume')->nullable();
            $table->string('today_volume')->nullable();
            $table->string('average_volume')->nullable();
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
        Schema::dropIfExists('rangking_volumes');
    }
}
