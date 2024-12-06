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
        Schema::table('deductions', function (Blueprint $table) {
            $table->dropForeign('fk_deductions_deductions');
            $table->dropColumn('employee_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('deductions', function (Blueprint $table) {
            //
        });
    }
};
