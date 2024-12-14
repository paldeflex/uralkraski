<!-- Форма найти покрытие -->
<section class="find-coating">
    <div class="container">
        <form
            action="{{ $action }}"
            method="{{ $method }}"
            class="find-coating-form card flex p-medium"
        >
            <div class="find-coating-inputs">
                <!-- Тип покрытия -->
                <div>
                    <select id="coatingTypeSelect" name="coating_type_id">
                        <option value="">Тип основы</option>
                        <option value="1">Полиуретановые</option>
                        <option value="2">Эпоксидные</option>
                        <option value="3">Модифицированные сополимеры</option>
                        <option value="4">Алкидно-уретановые</option>
                    </select>
                </div>
                <!-- Область применения -->
                <div>
                    <select id="applicationSelect" name="application_id">
                        <option value="">Область применения</option>
                        <option value="1">Решения для объектов нефтегазового комплекса</option>
                        <option value="2">Решения для машиностроения</option>
                        <option value="3">Решения для транспортного строительства</option>
                        <option value="4">Решения для промышленного и гражданского строительства</option>
                        <option value="5">Решения для портовой инфраструктуры</option>
                        <option value="6">Решения для химической отрасли</option>
                    </select>
                </div>
                <!-- Производитель -->
                <div>
                    <select id="manufacturerSelect" name="manufacturer_id">
                        <option value="">Цель назначения</option>
                        <option value="1">Защита металлоконструкций</option>
                        <option value="2">Защита подземных трубопроводов от коррозии</option>
                        <option value="3">Защита внутренней поверхности резервуаров</option>
                        <option value="4">Защита бетона от коррозии</option>
                    </select>
                </div>
                <!-- Толщина слоя -->
                <div>
                    <input
                        type="number"
                        placeholder="Толщина слоя (мкм)"
                        name="layer_thickness"
                    />
                </div>
                <!-- Ценовой диапазон -->
                <div>
                    <input
                        type="number"
                        placeholder="Цена от (₽)"
                        name="price_from"
                    />
                </div>
                <div>
                    <input
                        type="number"
                        placeholder="Цена до (₽)"
                        name="price_to"
                    />
                </div>
            </div>
            <div>
                <button type="button" class="btn btn-find-coating-reset">
                    Сбросить
                </button>
                <button class="btn btn-primary btn-find-coating-submit">
                    Найти
                </button>
            </div>
        </form>
    </div>
</section>
<!--/ Форма найти покрытие -->
