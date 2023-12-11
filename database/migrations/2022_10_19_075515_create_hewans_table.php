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
        Schema::create('hewans', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('breed');
            $table->string('colour');
            $table->string('age');
            $table->float('weight');
            $table->boolean('sex');
            $table->string('status')->default('available');
            $table->timestamps();
            $table->foreignId('kategoris_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hewans');
    }
};
