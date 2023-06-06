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
            $table->integer('no_resi');
            $table->string('receiver');
            $table->integer('PhoneNum');
            $table->string('toAddress');
            $table->integer('zip_code_to');
            $table->string('sender');
            $table->integer('sendPhoneNum');
            $table->integer('fragile');
            $table->date('estimated_time');
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
