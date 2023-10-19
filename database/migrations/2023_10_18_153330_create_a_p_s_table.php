<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('a_p_s', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('pop_id');
            $table->foreign('pop_id')->references('id')->on('pops');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('a_p_s');
    }
};
