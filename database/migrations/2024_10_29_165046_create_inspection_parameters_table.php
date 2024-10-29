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
        Schema::create('inspection_parameters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('inspection_form_id')->constrained()->onDelete('cascade');
            $table->integer('s_no');
            $table->string('inspection_parameter');
            $table->string('check_type')->default('Visual');
            $table->boolean('accepted')->default(false);
            $table->boolean('rejected')->default(false);
            $table->text('qc_noted')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspection_parameters');
    }
};
