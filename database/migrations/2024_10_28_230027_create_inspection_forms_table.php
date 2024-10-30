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
        Schema::create('inspection_forms', function (Blueprint $table) {
            $table->id();
            $table->string('work_order_no');
            $table->string('customer_name');
            $table->string('production_order_no')->nullable();
            $table->date('date')->nullable();
            $table->string('project')->nullable();
            $table->string('quality_inspector')->nullable();
            $table->string('signature')->nullable(); // For e-signature or file path
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspection_forms');
    }
};
