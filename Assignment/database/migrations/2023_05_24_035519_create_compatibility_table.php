<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompatibilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compatibility', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cpu_id');
            $table->unsignedBigInteger('motherboard_id');

            $table->foreign('cpu_id')->references('id')->on('cpu');
            $table->foreign('motherboard_id')->references('id')->on('motherboard');
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
        Schema::dropIfExists('compatibility');
    }
}
