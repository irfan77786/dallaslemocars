<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            if (!Schema::hasColumn('bookings', 'stripe_customer_id')) {
                $table->string('stripe_customer_id')->nullable()->after('payment_status');
            }
            if (!Schema::hasColumn('bookings', 'stripe_payment_method_id')) {
                $table->string('stripe_payment_method_id')->nullable()->after('payment_status');
            }
            if (!Schema::hasColumn('bookings', 'buffer_amount')) {
                $table->decimal('buffer_amount', 10, 2)->nullable()->after('stripe_payment_method_id');
            }
        });
    }

    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            if (Schema::hasColumn('bookings', 'buffer_amount')) {
                $table->dropColumn('buffer_amount');
            }
        });
    }
};
