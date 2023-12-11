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
        Schema::create('adoptions', function (Blueprint $table) {
            $table->id();
            $table->string('pickup_date')->default(now());
            $table->string('status')->default('adoption scheduled');
            $table->foreignId('user_id');
            $table->foreignId('hewan_id');
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
        Schema::dropIfExists('adoptions');
    }
};
