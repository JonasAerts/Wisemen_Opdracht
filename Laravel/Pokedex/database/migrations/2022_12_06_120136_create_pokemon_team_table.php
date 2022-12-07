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
        Schema::create('pokemon_team', function (Blueprint $table) {
            $table->foreignId('teams_id')->references('id')->on('teams')->onDelete('cascade');
            $table->foreignId('pokemon_details_id')->references('id')->on('pokemon_details')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokemon_team');
    }
};
