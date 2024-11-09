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
        Schema::create('payrolls', function (Blueprint $table) {
            $table->integer('# id')->primary();
            $table->integer('employee_id')->nullable()->index('fk_payrolls_employees');
            $table->integer('salary_id')->nullable()->index('fk_payrolls_salaries');
            $table->integer('payment_period')->nullable();
            $table->integer('total_earning')->nullable();
            $table->integer('total_deductions')->nullable();
            $table->integer('net_pay')->nullable();
            $table->char('status', 1)->nullable();
            $table->char('pay_slip', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payrolls');
    }
};
