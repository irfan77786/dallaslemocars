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
        Schema::create('stored_locations', function (Blueprint $table) {
            $table->id();
            $table->enum('address_type', ['home', 'other'])->default('home');
            $table->string('location_label')->nullable();
            $table->text('address')->nullable();
            $table->string('apt_suite')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stored_locations');
    }
};
