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
        Schema::create('employee_records', function (Blueprint $table) {
            $table->integer('# id')->primary();
            $table->integer('employee_id')->nullable()->index('fk_employee_records_employees');
            $table->string('record_type', 100)->nullable();
            $table->date('record_date')->nullable();
            $table->string('record_description', 100)->nullable();
            $table->string('outcome', 100)->nullable();
            $table->string('comments', 100)->nullable();
            $table->string('handled_by', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_records');
    }
};
