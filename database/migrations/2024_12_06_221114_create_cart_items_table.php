<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id(); // Автоинкрементный первичный ключ
            $table->foreignIdFor(User::class, 'user_id'); // Внешний ключ на пользователя, создавшего корзину
            $table->foreignId('product_id')->references('id')->on('products'); // Внешний ключ на таблицу продуктов
            $table->timestamps(); // Поля created_at и updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cart_items'); // Удаление таблицы при откате миграции
    }
};
