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
        Schema::create('employees', function (Blueprint $table) {
            $table->integer('# id')->primary();
            $table->string('first_name', 100)->nullable();
            $table->string('last_name', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('phone_number', 100)->nullable();
            $table->string('physical_address', 100)->nullable();
            $table->integer('department')->nullable()->index('fk_employees_departments');
            $table->date('hire_date')->nullable();
            $table->decimal('salary', 10, 0)->nullable();
            $table->char('disability_status', 100)->nullable();
            $table->char('job_basis', 100)->nullable();
            $table->char('emergency_contact', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
