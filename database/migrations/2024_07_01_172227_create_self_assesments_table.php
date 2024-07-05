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
        Schema::create('self_assesments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('perawat_id');
            $table->date('tanggal_self_assesment');
            $table->longText('record_self_assesment');
            $table->string('hasil');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('self_assesments');
    }
};
