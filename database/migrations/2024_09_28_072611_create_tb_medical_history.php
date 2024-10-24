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
        Schema::create('tb_medical_history', function (Blueprint $table) {
            $table->id('student_id');
            $table->unsignedBigInteger('patient_id');
            $table->string('diagnosis',255);
            $table->string('Treatment',255);
            $table->string('Nurse_name',255);
            $table->date('Visit_date');
            $table->timestamps();

            $table->foreignId('patient_id')->references('patient_id')->on('tb_patient');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_medical_history');
    }
};
