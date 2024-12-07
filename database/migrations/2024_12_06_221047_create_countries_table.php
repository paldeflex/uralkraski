<?php

use Illuminate\Database\Migrations\Migration; // Класс для работы с миграциями
use Illuminate\Database\Schema\Blueprint; // Класс для определения структуры таблиц
use Illuminate\Support\Facades\Schema; // Фасад для управления схемой базы данных

return new class extends Migration
{
    // Метод для создания таблицы
    public function up(): void
    {
        // Создаём таблицу countries
        Schema::create('countries', function (Blueprint $table) {
            $table->string('code', 3)->primary(); // Поле для кода страны (например, "RUS"), строка длиной до 3 символов, первичный ключ
            $table->string('name'); // Поле для названия страны
            $table->jsonb('states')->nullable(); // Поле для хранения данных о штатах или регионах в формате JSON, может быть NULL
        });
    }

    // Метод для удаления таблицы
    public function down(): void
    {
        // Удаляем таблицу countries
        Schema::dropIfExists('countries');
    }
};
