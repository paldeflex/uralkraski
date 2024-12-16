<x-app-layout title="Добавить новый товар">
    <main>
        <div class="container-small">
            <h1 class="product-details-page-title">Добавить новый товар</h1>
            <form
                action=""
                method="POST"
                enctype="multipart/form-data"
                class="card add-new-product-form"
            >
                <div class="form-content">
                    <div class="form-details">
                        <div class="form-group">
                            <label class="checkbox">
                                <input type="checkbox" name="published" />
                                Отобразить на сайте
                            </label>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Название товара</label>
                                    <input type="text" placeholder="" />
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <label>Описание товара</label>
                            <textarea rows="10"></textarea>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Тип основы</label>
                                    <select>
                                        <option value="">Тип основы</option>
                                        <option value="1">Полиуретановые</option>
                                        <option value="2">Эпоксидные</option>
                                        <option value="3">Модифицированные сополимеры</option>
                                        <option value="4">Алкидно-уретановые</option>
                                    </select>
                                    <p class="error-message">Обязательное поле</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Цель назначения</label>
                                    <select>
                                        <option value="">Цель назначения</option>
                                        <option value="1">Защита металлоконструкций</option>
                                        <option value="2">Защита подземных трубопроводов от коррозии</option>
                                        <option value="3">Защита внутренней поверхности резервуаров</option>
                                        <option value="4">Защита бетона от коррозии</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Цена</label>
                                    <input type="number" placeholder="Цена" />
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Регион</label>
                                    <select>
                                        <option value="">Регион</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Город</label>
                                    <select>
                                        <option value="">Город</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Адрес</label>
                                    <input placeholder="Адрес" />
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Телефон</label>
                                    <input placeholder="Телефон" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label class="checkbox">
                                        <input
                                            type="checkbox"
                                            name="quick_drying"
                                            value="1"
                                        />
                                        <p class="product-properties">Материал быстросохнущий</p>
                                    </label>

                                    <label class="checkbox">
                                        <input type="checkbox" name="weatherproof" value="1" />
                                        <p class="product-properties">Материал атмосферостойкий</p>
                                    </label>

                                    <label class="checkbox">
                                        <input
                                            type="checkbox"
                                            name="thick_layered"
                                            value="1"
                                        />
                                        <p class="product-properties">Материал толстослойный</p>
                                    </label>

                                    <label class="checkbox">
                                        <input type="checkbox" name="subzero_temp" value="1" />
                                        <p class="product-properties">Для нанесения при отрицательных температурах</p>
                                    </label>

                                    <label class="checkbox">
                                        <input type="checkbox" name="one_part" value="1" />
                                        <p class="product-properties">Материал однокомпонентный</p>
                                    </label>

                                    <label class="checkbox">
                                        <input
                                            type="checkbox"
                                            name="water_operation"
                                            value="1"
                                        />
                                        <p class="product-properties">Для эксплуатации в морской и пресной воде</p>
                                    </label>
                                </div>
                                <div class="col">
                                    <label class="checkbox">
                                        <input type="checkbox" name="durable_coating" value="1" />
                                        <p class="product-properties">Покрытие стойкое к проливам нефти и нефтепродуктов</p>
                                    </label>

                                    <label class="checkbox">
                                        <input type="checkbox" name="zinc_filled" value="1" />
                                        <p class="product-properties">Материал цинконаполненный</p>
                                    </label>

                                    <label class="checkbox">
                                        <input type="checkbox" name="anticorrosive" value="1" />
                                        <p class="product-properties">Материал содержит антикоррозионные пигменты</p>
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="form-images">
                        <div class="form-image-upload">
                            <div class="upload-placeholder">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    style="width: 48px"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                                    />
                                </svg>
                            </div>
                            <input id="productFormImageUpload" type="file" multiple />
                        </div>
                        <div id="imagePreviews" class="product-form-images"></div>
                    </div>
                </div>
                <div class="p-medium" style="width: 100%">
                    <div class="flex justify-end gap-1">
                        <button type="button" class="btn btn-default">Сброс настроек</button>
                        <button class="btn btn-primary">Добавить</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
</x-app-layout>
