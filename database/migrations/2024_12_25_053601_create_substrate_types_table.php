<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('substrate_types', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('substrate_types');
    }
};
