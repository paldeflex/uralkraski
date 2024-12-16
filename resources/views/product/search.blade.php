<x-app-layout>
    <main>
        <!-- Найденные продукты -->
        <section>
            <div class="container">
                <div class="sm:flex products-center justify-between mb-medium">
                    <div class="flex products-center">
                        <button class="show-filters-button flex products-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" style="width: 20px">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M6 13.5V3.75m0 9.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 9.75V10.5" />
                            </svg>
                            Filters
                        </button>
                        <h2>Определите критерий поиска</h2>
                    </div>

                    <select class="sort-dropdown">
                        <option value="">Order By</option>
                        <option value="price">Price Asc</option>
                        <option value="-price">Price Desc</option>
                    </select>
                </div>
                <div class="search-item-results-wrapper">
                    <div class="search-products-sidebar">
                        <div class="card card-found-products">
                            <p class="m-0">Найдено <strong>4,568</strong> продуктов</p>

                            <button class="close-filters-button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" style="width: 24px">
                                    <path fill-rule="evenodd"
                                          d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z"
                                          clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <!-- Find a product form -->
                        <section class="find-a-product">
                                <x-search-form  action="/search" method="GET" />
                        </section>
                        <!--/ Find a product form -->
                    </div>

                    <div class="search-products-results">
                        <div class="product-items-listing">
                            @for ($i = 0; $i < 15; $i++)
                                <x-product-item />
                            @endfor
                        </div>
                        <nav class="pagination my-large">
                            <a href="#" class="pagination-item">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                     stroke="currentColor" style="width: 18px">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="m18.75 4.5-7.5 7.5 7.5 7.5m-6-15L5.25 12l7.5 7.5" />
                                </svg>
                            </a>
                            <a href="#" class="pagination-item">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                     stroke="currentColor" style="width: 18px">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                                </svg>
                            </a>

                            <a href="#" class="pagination-item"> 1 </a>
                            <a href="#" class="pagination-item"> 2 </a>
                            <span class="pagination-item active"> 3 </span>
                            <a href="#" class="pagination-item"> 4 </a>
                            <a href="#" class="pagination-item">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                     stroke="currentColor" style="width: 18px">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                            </a>
                            <a href="#" class="pagination-item">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                     stroke="currentColor" style="width: 18px">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                                </svg>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!--/ Found Cars -->
    </main>
</x-app-layout>
