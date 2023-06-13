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
        Schema::create('pakets', function (Blueprint $table) {
            $table->id('id_paket');
            $table->integer('no_resi')->nullable();
            $table->string('receiver_name');
            $table->bigInteger('receiver_PhoneNum');
            $table->string('receiver_Address');
            $table->integer('receiver_zip_code');
            $table->string('sender_name');
            $table->bigInteger('sender_PhoneNum');
            $table->boolean('fragile');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pakets');
    }
};
