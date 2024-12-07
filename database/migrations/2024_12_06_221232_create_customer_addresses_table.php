<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('customer_addresses', function (Blueprint $table) {
            $table->id(); // Автоинкрементный первичный ключ
            $table->string('type', 45); // Тип адреса (например, "billing" или "shipping")
            $table->string('address1'); // Основной адрес
            $table->string('address2'); // Дополнительный адрес
            $table->string('city'); // Город
            $table->string('state')->nullable(); // Область/Штат, может быть NULL
            $table->string('zipcode', 45); // Почтовый индекс
            $table->string('country_code', 3); // Код страны (например, "USA")
            $table->foreignId('customer_id')->references('id')->on('customers'); // Внешний ключ на таблицу клиентов
            $table->timestamps(); // Поля created_at и updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customer_addresses'); // Удаление таблицы при откате миграции
    }
};
