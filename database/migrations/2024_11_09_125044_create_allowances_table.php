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
        Schema::create('allowances', function (Blueprint $table) {
            $table->integer('# id')->primary();
            $table->integer('employee_id')->nullable()->unique('unq_allowance_employee_id');
            $table->text('allowance_type')->nullable();
            $table->decimal('amount', 10, 0)->nullable();
            $table->date('date_granted')->nullable();
            $table->char('allowance_privilage', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allowances');
    }
};
