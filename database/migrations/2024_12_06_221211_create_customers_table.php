<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id(); // Автоинкрементный первичный ключ
            $table->string('first_name'); // Имя клиента
            $table->string('last_name'); // Фамилия клиента
            $table->string('phone_number'); // Номер телефона клиента
            $table->string('status', 45); // Статус клиента (например, "active" или "inactive")
            $table->timestamps(); // Поля created_at и updated_at
            $table->foreignIdFor(User::class, 'created_by')->nullable(); // Внешний ключ на пользователя, создавшего запись
            $table->foreignIdFor(User::class, 'updated_by')->nullable(); // Внешний ключ на пользователя, обновившего запись
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customers'); // Удаление таблицы при откате миграции
    }
};
