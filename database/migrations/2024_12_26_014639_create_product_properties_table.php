<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('product_properties', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id')->primary();
            $table->boolean('quick_drying')->default(0);
            $table->boolean('weatherproof')->default(0);
            $table->boolean('thick_layered')->default(0);
            $table->boolean('subzero_temp')->default(0);
            $table->boolean('one_part')->default(0);
            $table->boolean('water_operation')->default(0);
            $table->boolean('durable_coating')->default(0);
            $table->boolean('zinc_filled')->default(0);
            $table->boolean('anticorrosive')->default(0);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_properties');
    }
};
