<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id(); // Автоинкрементный первичный ключ
            $table->foreignId('order_id')->references('id')->on('orders'); // Внешний ключ на таблицу заказов
            $table->decimal('amount', 10, 2); // Сумма платежа
            $table->string('status', 45); // Статус платежа (например, "pending" или "completed")
            $table->string('type', 45); // Тип платежа (например, "card" или "cash")
            $table->timestamps(); // Поля created_at и updated_at
            $table->foreignIdFor(User::class, 'created_by')->nullable(); // Внешний ключ на пользователя, создавшего запись
            $table->foreignIdFor(User::class, 'updated_by')->nullable(); // Внешний ключ на пользователя, обновившего запись
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments'); // Удаление таблицы при откате миграции
    }
};
