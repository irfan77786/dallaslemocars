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
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_type');
            $table->string('trip_type');
            $table->string('number_of_passengers');
            $table->date('trip_date');
            $table->time('trip_time');
            $table->string('pickup_address');
            $table->string('dropoff_address');
            $table->string('full_name');
            $table->string('email');
            $table->longText('message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};
