<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuntionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funtions', function (Blueprint $table) {
            $table->id();
            $table->dateTime('start',0);
            $table->dateTime('end',0);
            $table->boolean('available')->default(true);
            $table->enum('type',['mañana','tarde','noche']);
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
        Schema::dropIfExists('funtions');
    }
}
