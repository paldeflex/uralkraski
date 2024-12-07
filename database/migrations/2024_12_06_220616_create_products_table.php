<?php

// Подключаем необходимые классы и фасады из Laravel
use App\Models\User; // Модель User для связи с таблицей пользователей
use Illuminate\Database\Migrations\Migration; // Базовый класс для создания миграций
use Illuminate\Database\Schema\Blueprint; // Инструмент для построения схем таблиц
use Illuminate\Support\Facades\Schema; // Фасад для работы со схемами базы данных

// Возвращаем анонимный класс миграции
return new class extends Migration
{
    // Метод, который выполняется при применении миграции
    public function up(): void
    {
        // Создаем таблицу 'products'
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Автоинкрементный первичный ключ
            $table->string('title', 2000); // Поле для названия продукта, строка длиной до 2000 символов
            $table->string('slug', 2000); // Поле для URL-идентификатора, строка длиной до 2000 символов
            $table->string('image', 2000)->nullable(); // Поле для хранения ссылки на изображение, может быть пустым
            $table->string('image_mime')->nullable(); // Поле для MIME-типа изображения, может быть пустым
            $table->integer('image_size')->nullable(); // Поле для размера изображения, может быть пустым
            $table->string('description', 2000)->nullable(); // Поле для описания продукта, строка до 2000 символов, может быть пустым
            $table->decimal('price', 10, 2)->nullable(); // Поле для цены, десятичное число до 10 цифр, 2 из которых после запятой
            $table->foreignIdFor(User::class, 'created_by')->nullable(); // Внешний ключ для пользователя, создавшего запись, может быть пустым
            $table->foreignIdFor(User::class, 'updated_by')->nullable(); // Внешний ключ для пользователя, обновившего запись, может быть пустым
            $table->softDeletes(); // Поле для мягкого удаления (удаление без физического удаления записи)
            $table->foreignIdFor(User::class, 'deleted_by')->nullable(); // Внешний ключ для пользователя, удалившего запись, может быть пустым
            $table->timestamps(); // Поля created_at и updated_at для хранения времени создания и обновления записи
        });
    }

    // Метод, который выполняется при отмене миграции
    public function down(): void
    {
        // Удаляем таблицу 'products'
        Schema::dropIfExists('products');
    }
};
