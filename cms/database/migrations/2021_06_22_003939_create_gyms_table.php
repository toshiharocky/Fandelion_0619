<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGymsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gyms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('gymstatus_id')->default(1);
            $table->string('gym_title');
            $table->text('gym_desc');
            $table->integer('gymType_id');
            $table->integer('superHost_flg')->default(0);
            $table->integer('review_amount')->default(0);
            $table->float('review_average')->default(0);
            $table->integer('guest_limit')->default(1);
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
        Schema::dropIfExists('gyms');
    }
}
