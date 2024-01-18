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


        if (Schema::hasColumn('object_language', 'type')) {
            Schema::table('object_language', function (Blueprint $table) {
                $table->dropColumn('type');
            });
        }
        if (!Schema::hasColumn('object_language', 'object_type')) {
            Schema::table('object_language', function (Blueprint $table) {
                $table->string('object_type')->after('language_id');
            });
        }
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};
