@extends('layouts.app')

@section('content')
    <!-- Слайдер -->
    <section class="hero-slider">
        <!-- Карусель -->
        <div class="hero-slides">
            <!-- Слайд 1 -->
            <div class="hero-slide">
                <div class="container">
                    <div class="slide-content">
                        <h1 class="hero-slider-title">
                            Антикоррозионные <strong>системы и покрытия</strong>
                        </h1>
                        <div class="hero-slider-content">
                            <p>
                               Для защиты металлоконструкций и бетона в транспортном строительстве
                            </p>

                            <button class="btn btn-hero-slider">Посмотреть каталог</button>
                        </div>
                    </div>
                    <div class="slide-image">
                        <img src="/img/hero-image-1.png" alt="" class="img-responsive" />
                    </div>
                </div>
            </div>
            <!-- Слайд 2 -->
            <div class="hero-slide">
                <div class="flex container">
                    <div class="slide-content">
                        <h2 class="hero-slider-title">
                            Защита от <strong>подземной</strong> коррозии
                        </h2>
                        <div class="hero-slider-content">
                            <p>
                                Резервуаров, оборудования, металлоконструкций
                            </p>

                            <button class="btn btn-hero-slider">Посмотреть каталог</button>
                        </div>
                    </div>
                    <div class="slide-image">
                        <img src="/img/hero-image-2.png" alt="" class="img-responsive" />
                    </div>
                </div>
            </div>
            <button type="button" class="hero-slide-prev">
                <svg
                    style="width: 18px"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 6 10"
                >
                    <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M5 1 1 5l4 4"
                    />
                </svg>
                <span class="sr-only">Previous</span>
            </button>
            <button type="button" class="hero-slide-next">
                <svg
                    style="width: 18px"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 6 10"
                >
                    <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="m1 9 4-4-4-4"
                    />
                </svg>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </section>
    <!--/ Слайдер -->
    <main>
        <!-- Форма найти покрытие -->
        <section class="find-coating">
            <div class="container">
                <form
                    action="/coatings.html"
                    method="GET"
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

        <!-- Новые товары -->
        <section>
            <div class="container">
                <h2>Последние добавленные товары</h2>
                <div class="coating-items-listing">
                    <div class="coating-item card">
                        <a href="/view.html">
                            <img
                                src="/img/coatings/coating-1/2.jpeg"
                                alt=""
                                class="coating-item-img rounded-t"
                            />
                        </a>
                        <div class="p-medium">
                            <div class="flex items-center justify-between">
                                <small class="m-0 text-muted">Екатеринбург</small>
                                <button class="btn-heart">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        style="width: 20px"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                                        />
                                    </svg>
                                </button>
                            </div>
                            <h2 class="coating-item-title">СК-ПУР Полиуретановая грунтовка для металла</h2>
                            <p class="coating-item-price">500 ₽</p>
                            <hr />
                            <div class="m-0 coating-item-badge-container">
                                <div class="coating-item-badge coating-item-badge-1"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал быстросохнущий">
                                </div>
                                <div class="coating-item-badge coating-item-badge-2"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал атмосферостойкий">
                                </div>
                                <div class="coating-item-badge coating-item-badge-3"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал толстослойный">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="coating-item card">
                        <a href="/view.html">
                            <img
                                src="/img/coatings/coating-1/3.jpeg"
                                alt=""
                                class="coating-item-img rounded-t"
                            />
                        </a>
                        <div class="p-medium">
                            <div class="flex items-center justify-between">
                                <small class="m-0 text-muted">Екатеринбург</small>
                                <button class="btn-heart">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        style="width: 20px"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                                        />
                                    </svg>
                                </button>
                            </div>
                            <h2 class="coating-item-title">СК-ПУР Полиуретановая грунтовка для металла</h2>
                            <p class="coating-item-price">500 ₽</p>
                            <hr />
                            <div class="m-0 coating-item-badge-container">
                                <div class="coating-item-badge coating-item-badge-1"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал быстросохнущий">
                                </div>
                                <div class="coating-item-badge coating-item-badge-2"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал атмосферостойкий">
                                </div>
                                <div class="coating-item-badge coating-item-badge-3"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал толстослойный">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="coating-item card">
                        <a href="/view.html">
                            <img
                                src="/img/coatings/coating-1/4.jpeg"
                                alt=""
                                class="coating-item-img rounded-t"
                            />
                        </a>
                        <div class="p-medium">
                            <div class="flex items-center justify-between">
                                <small class="m-0 text-muted">Екатеринбург</small>
                                <button class="btn-heart">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        style="width: 20px"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                                        />
                                    </svg>
                                </button>
                            </div>
                            <h2 class="coating-item-title">СК-ПУР Полиуретановая грунтовка для металла</h2>
                            <p class="coating-item-price">500 ₽</p>
                            <hr />
                            <div class="m-0 coating-item-badge-container">
                                <div class="coating-item-badge coating-item-badge-1"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал быстросохнущий">
                                </div>
                                <div class="coating-item-badge coating-item-badge-2"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал атмосферостойкий">
                                </div>
                                <div class="coating-item-badge coating-item-badge-3"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал толстослойный">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="coating-item card">
                        <a href="/view.html">
                            <img
                                src="/img/coatings/coating-1/5.jpeg"
                                alt=""
                                class="coating-item-img rounded-t"
                            />
                        </a>
                        <div class="p-medium">
                            <div class="flex items-center justify-between">
                                <small class="m-0 text-muted">Екатеринбург</small>
                                <button class="btn-heart">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        style="width: 20px"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                                        />
                                    </svg>
                                </button>
                            </div>
                            <h2 class="coating-item-title">СК-ПУР Полиуретановая грунтовка для металла</h2>
                            <p class="coating-item-price">500 ₽</p>
                            <hr />
                            <div class="m-0 coating-item-badge-container">
                                <div class="coating-item-badge coating-item-badge-1"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал быстросохнущий">
                                </div>
                                <div class="coating-item-badge coating-item-badge-2"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал атмосферостойкий">
                                </div>
                                <div class="coating-item-badge coating-item-badge-3"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал толстослойный">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="coating-item card">
                        <a href="/view.html">
                            <img
                                src="/img/coatings/coating-1/6.jpeg"
                                alt=""
                                class="coating-item-img rounded-t"
                            />
                        </a>
                        <div class="p-medium">
                            <div class="flex items-center justify-between">
                                <small class="m-0 text-muted">Екатеринбург</small>
                                <button class="btn-heart">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        style="width: 20px"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                                        />
                                    </svg>
                                </button>
                            </div>
                            <h2 class="coating-item-title">СК-ПУР Полиуретановая грунтовка для металла</h2>
                            <p class="coating-item-price">500 ₽</p>
                            <hr />
                            <div class="m-0 coating-item-badge-container">
                                <div class="coating-item-badge coating-item-badge-1"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал быстросохнущий">
                                </div>
                                <div class="coating-item-badge coating-item-badge-2"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал атмосферостойкий">
                                </div>
                                <div class="coating-item-badge coating-item-badge-3"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал толстослойный">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="coating-item card">
                        <a href="/view.html">
                            <img
                                src="/img/coatings/coating-1/7.jpeg"
                                alt=""
                                class="coating-item-img rounded-t"
                            />
                        </a>
                        <div class="p-medium">
                            <div class="flex items-center justify-between">
                                <small class="m-0 text-muted">Екатеринбург</small>
                                <button class="btn-heart">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        style="width: 20px"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                                        />
                                    </svg>
                                </button>
                            </div>
                            <h2 class="coating-item-title">СК-ПУР Полиуретановая грунтовка для металла</h2>
                            <p class="coating-item-price">500 ₽</p>
                            <hr />
                            <div class="m-0 coating-item-badge-container">
                                <div class="coating-item-badge coating-item-badge-1"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал быстросохнущий">
                                </div>
                                <div class="coating-item-badge coating-item-badge-2"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал атмосферостойкий">
                                </div>
                                <div class="coating-item-badge coating-item-badge-3"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал толстослойный">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="coating-item card">
                        <a href="/view.html">
                            <img
                                src="/img/coatings/coating-1/1.jpeg"
                                alt=""
                                class="coating-item-img rounded-t"
                            />
                        </a>
                        <div class="p-medium">
                            <div class="flex items-center justify-between">
                                <small class="m-0 text-muted">Екатеринбург</small>
                                <button class="btn-heart">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        style="width: 20px"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                                        />
                                    </svg>
                                </button>
                            </div>
                            <h2 class="coating-item-title">СК-ПУР Полиуретановая грунтовка для металла</h2>
                            <p class="coating-item-price">500 ₽</p>
                            <hr />
                            <div class="m-0 coating-item-badge-container">
                                <div class="coating-item-badge coating-item-badge-1"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал быстросохнущий">
                                </div>
                                <div class="coating-item-badge coating-item-badge-2"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал атмосферостойкий">
                                </div>
                                <div class="coating-item-badge coating-item-badge-3"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал толстослойный">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="coating-item card">
                        <a href="/view.html">
                            <img
                                src="/img/coatings/coating-1/1.jpeg"
                                alt=""
                                class="coating-item-img rounded-t"
                            />
                        </a>
                        <div class="p-medium">
                            <div class="flex items-center justify-between">
                                <small class="m-0 text-muted">Екатеринбург</small>
                                <button class="btn-heart">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        style="width: 20px"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                                        />
                                    </svg>
                                </button>
                            </div>
                            <h2 class="coating-item-title">СК-ПУР Полиуретановая грунтовка для металла</h2>
                            <p class="coating-item-price">500 ₽</p>
                            <hr />
                            <div class="m-0 coating-item-badge-container">
                                <div class="coating-item-badge coating-item-badge-1"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал быстросохнущий">
                                </div>
                                <div class="coating-item-badge coating-item-badge-2"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал атмосферостойкий">
                                </div>
                                <div class="coating-item-badge coating-item-badge-3"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал толстослойный">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="coating-item card">
                        <a href="/view.html">
                            <img
                                src="/img/coatings/coating-1/1.jpeg"
                                alt=""
                                class="coating-item-img rounded-t"
                            />
                        </a>
                        <div class="p-medium">
                            <div class="flex items-center justify-between">
                                <small class="m-0 text-muted">Екатеринбург</small>
                                <button class="btn-heart">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        style="width: 20px"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                                        />
                                    </svg>
                                </button>
                            </div>
                            <h2 class="coating-item-title">СК-ПУР Полиуретановая грунтовка для металла</h2>
                            <p class="coating-item-price">500 ₽</p>
                            <hr />
                            <div class="m-0 coating-item-badge-container">
                                <div class="coating-item-badge coating-item-badge-1"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал быстросохнущий">
                                </div>
                                <div class="coating-item-badge coating-item-badge-2"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал атмосферостойкий">
                                </div>
                                <div class="coating-item-badge coating-item-badge-3"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал толстослойный">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="coating-item card">
                        <a href="/view.html">
                            <img
                                src="/img/coatings/coating-1/1.jpeg"
                                alt=""
                                class="coating-item-img rounded-t"
                            />
                        </a>
                        <div class="p-medium">
                            <div class="flex items-center justify-between">
                                <small class="m-0 text-muted">Екатеринбург</small>
                                <button class="btn-heart">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        style="width: 20px"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                                        />
                                    </svg>
                                </button>
                            </div>
                            <h2 class="coating-item-title">СК-ПУР Полиуретановая грунтовка для металла</h2>
                            <p class="coating-item-price">500 ₽</p>
                            <hr />
                            <div class="m-0 coating-item-badge-container">
                                <div class="coating-item-badge coating-item-badge-1"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал быстросохнущий">
                                </div>
                                <div class="coating-item-badge coating-item-badge-2"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал атмосферостойкий">
                                </div>
                                <div class="coating-item-badge coating-item-badge-3"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал толстослойный">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="coating-item card">
                        <a href="/view.html">
                            <img
                                src="/img/coatings/coating-1/1.jpeg"
                                alt=""
                                class="coating-item-img rounded-t"
                            />
                        </a>
                        <div class="p-medium">
                            <div class="flex items-center justify-between">
                                <small class="m-0 text-muted">Екатеринбург</small>
                                <button class="btn-heart">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        style="width: 20px"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                                        />
                                    </svg>
                                </button>
                            </div>
                            <h2 class="coating-item-title">СК-ПУР Полиуретановая грунтовка для металла</h2>
                            <p class="coating-item-price">500 ₽</p>
                            <hr />
                            <div class="m-0 coating-item-badge-container">
                                <div class="coating-item-badge coating-item-badge-1"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал быстросохнущий">
                                </div>
                                <div class="coating-item-badge coating-item-badge-2"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал атмосферостойкий">
                                </div>
                                <div class="coating-item-badge coating-item-badge-3"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал толстослойный">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="coating-item card">
                        <a href="/view.html">
                            <img
                                src="/img/coatings/coating-1/1.jpeg"
                                alt=""
                                class="coating-item-img rounded-t"
                            />
                        </a>
                        <div class="p-medium">
                            <div class="flex items-center justify-between">
                                <small class="m-0 text-muted">Екатеринбург</small>
                                <button class="btn-heart">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        style="width: 20px"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                                        />
                                    </svg>
                                </button>
                            </div>
                            <h2 class="coating-item-title">СК-ПУР Полиуретановая грунтовка для металла</h2>
                            <p class="coating-item-price">500 ₽</p>
                            <hr />
                            <div class="m-0 coating-item-badge-container">
                                <div class="coating-item-badge coating-item-badge-1"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал быстросохнущий">
                                </div>
                                <div class="coating-item-badge coating-item-badge-2"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал атмосферостойкий">
                                </div>
                                <div class="coating-item-badge coating-item-badge-3"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал толстослойный">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="coating-item card">
                        <a href="/view.html">
                            <img
                                src="/img/coatings/coating-1/1.jpeg"
                                alt=""
                                class="coating-item-img rounded-t"
                            />
                        </a>
                        <div class="p-medium">
                            <div class="flex items-center justify-between">
                                <small class="m-0 text-muted">Екатеринбург</small>
                                <button class="btn-heart">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        style="width: 20px"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                                        />
                                    </svg>
                                </button>
                            </div>
                            <h2 class="coating-item-title">СК-ПУР Полиуретановая грунтовка для металла</h2>
                            <p class="coating-item-price">500 ₽</p>
                            <hr />
                            <div class="m-0 coating-item-badge-container">
                                <div class="coating-item-badge coating-item-badge-1"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал быстросохнущий">
                                </div>
                                <div class="coating-item-badge coating-item-badge-2"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал атмосферостойкий">
                                </div>
                                <div class="coating-item-badge coating-item-badge-3"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал толстослойный">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="coating-item card">
                        <a href="/view.html">
                            <img
                                src="/img/coatings/coating-1/1.jpeg"
                                alt=""
                                class="coating-item-img rounded-t"
                            />
                        </a>
                        <div class="p-medium">
                            <div class="flex items-center justify-between">
                                <small class="m-0 text-muted">Екатеринбург</small>
                                <button class="btn-heart">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        style="width: 20px"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                                        />
                                    </svg>
                                </button>
                            </div>
                            <h2 class="coating-item-title">СК-ПУР Полиуретановая грунтовка для металла</h2>
                            <p class="coating-item-price">500 ₽</p>
                            <hr />
                            <div class="m-0 coating-item-badge-container">
                                <div class="coating-item-badge coating-item-badge-1"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал быстросохнущий">
                                </div>
                                <div class="coating-item-badge coating-item-badge-2"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал атмосферостойкий">
                                </div>
                                <div class="coating-item-badge coating-item-badge-3"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал толстослойный">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="coating-item card">
                        <a href="/view.html">
                            <img
                                src="/img/coatings/coating-1/1.jpeg"
                                alt=""
                                class="coating-item-img rounded-t"
                            />
                        </a>
                        <div class="p-medium">
                            <div class="flex items-center justify-between">
                                <small class="m-0 text-muted">Екатеринбург</small>
                                <button class="btn-heart">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        style="width: 20px"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                                        />
                                    </svg>
                                </button>
                            </div>
                            <h2 class="coating-item-title">СК-ПУР Полиуретановая грунтовка для металла</h2>
                            <p class="coating-item-price">500 ₽</p>
                            <hr />
                            <div class="m-0 coating-item-badge-container">
                                <div class="coating-item-badge coating-item-badge-1"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал быстросохнущий">
                                </div>
                                <div class="coating-item-badge coating-item-badge-2"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал атмосферостойкий">
                                </div>
                                <div class="coating-item-badge coating-item-badge-3"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал толстослойный">
                                </div>
                                <div class="coating-item-badge coating-item-badge-4"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Для нанесения при отрицательных температурах">
                                </div>
                                <div class="coating-item-badge coating-item-badge-5"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал однокомпонентный">
                                </div>
                                <div class="coating-item-badge coating-item-badge-7"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Для эксплуатации в морской и пресной воде">
                                </div>
                                <div class="coating-item-badge coating-item-badge-8"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Покрытие стойкое к проливам нефти и нефтепродуктов">
                                </div>
                                <div class="coating-item-badge coating-item-badge-9"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал цинконаполненный">
                                </div>
                                <div class="coating-item-badge coating-item-badge-10"
                                     style="background-image: url('{{ asset('img/icons_props.png') }}');" data-tooltip="Материал содержит антикоррозионные пигменты">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ Новые товары -->
    </main>
@endsection

