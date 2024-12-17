<!-- Форма найти товар -->
<section class="find-product">
    <form
        action="{{ route("product.search") }}"
        method="GET"
        class="find-a-product-form card flex p-medium"
    >
        <div class="find-a-product-inputs">
            <!-- Название товара -->
            <div>
                <input
                    type="text"
                    placeholder="Название товара"
                    name="product_title"
                />
            </div>
            <!-- Тип покрытия -->
            <div>
                <select id="productTypeSelect" name="product_type_id">
                    <option value="">Тип основы</option>
                    <option value="1">Полиуретановые</option>
                    <option value="2">Эпоксидные</option>
                    <option value="3">Модифицированные сополимеры</option>
                    <option value="4">Алкидно-уретановые</option>
                </select>
            </div>
            <!-- Цель назначения -->
            <div>
                <select id="manufacturerSelect" name="manufacturer_id">
                    <option value="">Цель назначения</option>
                    <option value="1">Защита металлоконструкций</option>
                    <option value="2">Защита подземных трубопроводов от коррозии</option>
                    <option value="3">Защита внутренней поверхности резервуаров</option>
                    <option value="4">Защита бетона от коррозии</option>
                </select>
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
            <div style="display: flex; justify-content: center; width: 320px; margin: 0 auto;">
                <button type="button" class="btn btn-find-product-reset">
                    Сбросить
                </button>
                <button class="btn btn-primary btn-find-product-submit">
                    Найти
                </button>
            </div>
        </div>
    </form>
</section>
<!--/ Форма найти товар -->
