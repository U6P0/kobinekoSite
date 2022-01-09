<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMountainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mountains', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->string('name');
            $table->string('kana');
            $table->integer('elevation');
            $table->string('category');
            $table->string('detailedUrl');
            $table->integer('stamina');
            $table->integer('technic');
            $table->string('route');
            $table->bigInteger('climbedNumber');
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
        Schema::dropIfExists('mountains');
    }
}
