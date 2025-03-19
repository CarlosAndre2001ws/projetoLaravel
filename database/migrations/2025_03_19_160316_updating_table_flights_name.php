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
        Schema::rename('flights', 'this_is_a_test');
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('this_is_a_test', 'flights');
    }
};
