<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalCostsTable extends Migration
{
    public function up(): void
    {
        Schema::create('hospital_costs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id'); // foreign key referencing the patients table
            $table->string('health_patient'); // for health services like X-ray, CT scan, etc.
            $table->decimal('amount', 15, 2); // for the cost of services
            $table->timestamps(); // for created_at and updated_at

            // Adding the foreign key constraint
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hospital_costs');
    }
}
