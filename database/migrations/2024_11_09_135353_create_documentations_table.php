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
        Schema::create('documentations', function (Blueprint $table) {
            $table->integer('# id')->primary();
            $table->integer('employee_id')->nullable()->index('fk_documentations_employees');
            $table->string('resume', 100)->nullable();
            $table->string('document_type', 100)->nullable();
            $table->string('document_name', 100)->nullable();
            $table->string('file_path', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentations');
    }
};
