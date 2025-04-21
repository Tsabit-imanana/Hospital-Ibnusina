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
        Schema::create('inpatients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_id')->constrained('rooms');
            $table->foreignId('patient_id')->constrained('patients');
            $table->date('date_in');
            $table->date('date_out');
            $table->date('total_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inpatients');
    }
};
