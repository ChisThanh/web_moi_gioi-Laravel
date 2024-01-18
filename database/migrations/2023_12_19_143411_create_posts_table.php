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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('company_id')->nullable()->constrained();
            $table->string('job_title')->nullable();
            $table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->integer('remote')->nullable();
            $table->boolean('is_parttime')->nullable();
            $table->boolean('is_pinned')->nullable();
            $table->integer('min_salary')->nullable();
            $table->integer('max_salary')->nullable();
            $table->integer('currency_salary')->default(1);
            $table->text('requirement')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->integer('number_applicant')->nullable();
            $table->integer('status')->default(0);
            $table->string('slug')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
