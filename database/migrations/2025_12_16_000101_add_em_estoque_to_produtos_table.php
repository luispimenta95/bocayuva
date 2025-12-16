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
        if (!Schema::hasColumn('produtos', 'em_estoque')) {
            Schema::table('produtos', function (Blueprint $table) {
                $table->boolean('em_estoque')->default(true)->after('promocao');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('produtos', 'em_estoque')) {
            Schema::table('produtos', function (Blueprint $table) {
                $table->dropColumn('em_estoque');
            });
        }
    }
};
