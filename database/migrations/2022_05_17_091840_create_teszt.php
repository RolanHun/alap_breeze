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
        Schema::create('teszt', function (Blueprint $table) {
            $table->id();
            $table->String('kerdes');
            $table->String('v1');
            $table->String('v2');
            $table->String('v3');
            $table->String('v4');
            $table->integer('helyes');
            $table->integer('kategoriaId');
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
        Schema::dropIfExists('teszt');
    }
};
