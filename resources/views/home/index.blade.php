<x-app-layout>
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
        <div class="container">
            <x-search-form action="/search" method="GET" />
        </div>
        <!-- Новые товары -->
        <section>
            <div class="container">
                <h2>Последние добавленные товары</h2>
                <div class="product-items-listing">
                    @for ($i = 0; $i < 15; $i++)
                        <x-product-item />
                    @endfor
                </div>
            </div>
        </section>
        <!--/ Новые товары -->
    </main>
</x-app-layout>
