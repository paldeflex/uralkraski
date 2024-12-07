<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id(); // Автоинкрементный первичный ключ
            $table->string('first_name'); // Имя клиента
            $table->string('last_name'); // Фамилия клиента
            $table->string('phone'); // Телефон клиента
            $table->string('address1'); // Основной адрес
            $table->string('address2'); // Дополнительный адрес
            $table->string('city', 255); // Город
            $table->string('state', 45)->nullable(); // Область/Штат, может быть NULL
            $table->string('zipcode', 45); // Почтовый индекс
            $table->string('country_code', 3); // Код страны (например, "USA")
            $table->timestamps(); // Поля created_at и updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('order_details'); // Удаление таблицы при откате миграции
    }
};
