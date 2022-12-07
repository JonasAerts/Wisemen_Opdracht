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
        Schema::create('sprites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pokemon_details_id')->references('id')->on('pokemon_details')->onDelete('cascade');
            $table->string('front_default')->nullable();
            $table->string('front_female')->nullable();
            $table->string('front_shiny')->nullable();
            $table->string('front_shiny_female')->nullable();
            $table->string('back_default')->nullable();
            $table->string('back_female')->nullable();
            $table->string('back_shiny')->nullable();
            $table->string('back_shiny_female')->nullable();
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sprites');
    }
};
