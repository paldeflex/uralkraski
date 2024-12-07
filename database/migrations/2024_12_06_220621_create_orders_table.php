<?php

use App\Models\User; // Подключаем модель User для создания внешних ключей
use Illuminate\Database\Migrations\Migration; // Класс для работы с миграциями
use Illuminate\Database\Schema\Blueprint; // Класс для определения структуры таблиц
use Illuminate\Support\Facades\Schema; // Фасад для управления схемой базы данных

return new class extends Migration
{
    // Метод для создания таблицы
    public function up(): void
    {
        // Создаём таблицу orders
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // Первичный ключ (автоинкремент)
            $table->decimal('total_price', 20, 2); // Поле для общей суммы заказа, десятичное число
            $table->string('status', 45); // Поле для статуса заказа, строка длиной до 45 символов
            $table->foreignIdFor(User::class, 'created_by')->nullable(); // Внешний ключ, связанный с таблицей users, указывает пользователя, создавшего заказ, может быть NULL
            $table->foreignIdFor(User::class, 'updated_by')->nullable(); // Внешний ключ, связанный с таблицей users, указывает пользователя, обновившего заказ, может быть NULL
            $table->timestamps(); // Поля created_at и updated_at для хранения времени создания и обновления записи
        });
    }

    // Метод для удаления таблицы
    public function down(): void
    {
        // Удаляем таблицу orders
        Schema::dropIfExists('orders');
    }
};
