<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id(); // Автоинкрементный первичный ключ
            $table->foreignId('order_id')->references('id')->on('orders'); // Внешний ключ на таблицу заказов
            $table->foreignId('product_id')->references('id')->on('products'); // Внешний ключ на таблицу продуктов
            $table->integer('quantity'); // Количество товаров в заказе
            $table->decimal('unit_price'); // Цена за единицу товара
            $table->timestamps(); // Поля created_at и updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('order_items'); // Удаление таблицы при откате миграции
    }
};
