<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasColumn('quotes', 'quote_number')) {
            Schema::table('quotes', function (Blueprint $table) {
                $table->string('quote_number')->nullable()->after('id');
            });
        }

        $quotes = DB::table('quotes')
            ->whereNull('quote_number')
            ->orWhere('quote_number', '')
            ->orderBy('id')
            ->get(['id']);

        $nextNumber = 41100;

        $latestQuoteNumber = DB::table('quotes')
            ->where('quote_number', 'like', 'GAQ-%')
            ->orderByRaw('CAST(SUBSTRING(quote_number, 5) AS UNSIGNED) DESC')
            ->value('quote_number');

        if ($latestQuoteNumber && preg_match('/GAQ-(\d+)/', $latestQuoteNumber, $matches)) {
            $nextNumber = (int) $matches[1];
        }

        foreach ($quotes as $quote) {
            $nextNumber++;
            DB::table('quotes')
                ->where('id', $quote->id)
                ->update(['quote_number' => 'GAQ-' . $nextNumber]);
        }

        Schema::table('quotes', function (Blueprint $table) {
            $table->string('quote_number')->nullable(false)->change();
        });

        Schema::table('quotes', function (Blueprint $table) {
            $table->unique('quote_number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('quotes', 'quote_number')) {
            Schema::table('quotes', function (Blueprint $table) {
                $table->dropUnique(['quote_number']);
                $table->dropColumn('quote_number');
            });
        }
    }
};
