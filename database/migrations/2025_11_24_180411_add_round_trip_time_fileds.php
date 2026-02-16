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
        if (! Schema::hasTable('bookings')) {
            return;
        }

        Schema::table('bookings', function (Blueprint $table) {
            if (! Schema::hasColumn('bookings', 'return_date')) {
                $table->date('return_date')->nullable();
            }

            if (! Schema::hasColumn('bookings', 'return_time')) {
                $table->time('return_time')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (! Schema::hasTable('bookings')) {
            return;
        }

        Schema::table('bookings', function (Blueprint $table) {
            $columnsToDrop = [];

            if (Schema::hasColumn('bookings', 'return_date')) {
                $columnsToDrop[] = 'return_date';
            }

            if (Schema::hasColumn('bookings', 'return_time')) {
                $columnsToDrop[] = 'return_time';
            }

            if (! empty($columnsToDrop)) {
                $table->dropColumn($columnsToDrop);
            }
        });
    }
};
