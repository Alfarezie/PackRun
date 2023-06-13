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
        Schema::create('lacaks', function (Blueprint $table) {
            $table->id('id_lacak');
            $table->unsignedBigInteger('id_paket');
            $table->foreign('id_paket')->references('id_paket')->on('pakets');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lacaks');
    }
};
