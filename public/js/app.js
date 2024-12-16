// Ждём, пока весь контент страницы будет загружен
document.addEventListener("DOMContentLoaded", function () {
    // Инициализация слайдера
    const initSlider = () => {
        // Получаем все слайды
        const slides = document.querySelectorAll(".hero-slide");
        let currentIndex = 0; // Текущий индекс слайда
        const totalSlides = slides.length; // Общее количество слайдов

        // Функция для перехода к определённому слайду
        function moveToSlide(n) {
            slides.forEach((slide, index) => {
                // Сдвигаем все слайды по оси X на указанное число процентов
                slide.style.transform = `translateX(${-100 * n}%)`;
                // Если текущий индекс совпадает, добавляем класс "active", иначе удаляем его
                if (n === index) {
                    slide.classList.add("active");
                } else {
                    slide.classList.remove("active");
                }
            });
            currentIndex = n;
        }

        // Функция для перехода к следующему слайду
        function nextSlide() {
            // Если текущий слайд последний, возвращаемся к первому
            if (currentIndex === totalSlides - 1) {
                moveToSlide(0);
            } else {
                moveToSlide(currentIndex + 1);
            }
        }

        // Функция для перехода к предыдущему слайду
        function prevSlide() {
            // Если текущий слайд первый, переходим к последнему
            if (currentIndex === 0) {
                moveToSlide(totalSlides - 1);
            } else {
                moveToSlide(currentIndex - 1);
            }
        }

        // Подключаем кнопки навигации (если они есть)
        const carouselNextButton = document.querySelector(".hero-slide-next");
        if (carouselNextButton) {
            carouselNextButton.addEventListener("click", nextSlide);
        }
        const carouselPrevButton = document.querySelector(".hero-slide-prev");
        if (carouselPrevButton) {
            carouselPrevButton.addEventListener("click", prevSlide);
        }

        // Инициализируем слайдер, начиная с первого слайда
        moveToSlide(0);
    };

    // Инициализация загрузчика изображений
    const initImagePicker = () => {
        const fileInput = document.querySelector("#itemFormImageUpload");
        const imagePreview = document.querySelector("#imagePreviews");
        if (!fileInput) {
            return;
        }
        fileInput.onchange = (ev) => {
            // Очищаем область предпросмотра, чтобы показать новые изображения
            imagePreview.innerHTML = "";
            const files = ev.target.files;
            for (let file of files) {
                // Читаем каждый файл и отображаем его в виде изображения
                readFile(file).then((url) => {
                    const img = createImage(url);
                    imagePreview.append(img);
                });
            }
        };

        // Функция чтения файла и получения его dataURL
        function readFile(file) {
            return new Promise((resolve, reject) => {
                const reader = new FileReader();
                reader.onload = (ev) => {
                    resolve(ev.target.result);
                };
                reader.onerror = (ev) => {
                    reject(ev);
                };
                reader.readAsDataURL(file);
            });
        }

        // Функция создания элемента изображения
        function createImage(url) {
            const a = document.createElement("a");
            a.classList.add("product-form-image-preview");
            a.innerHTML = `
                <img src="${url}"  alt=""/>
            `;
            return a;
        }
    };

    // Инициализация мобильного меню навигации
    const initMobileNavbar = () => {
        const btnToggle = document.querySelector(".btn-navbar-toggle");

        btnToggle.onclick = () => {
            // Переключаем класс "navbar-opened" у body, чтобы открыть/закрыть меню
            document.body.classList.toggle("navbar-opened");
        };
    };

    // Инициализация карусели изображений товара
    const imageCarousel = () => {
        const carousel = document.querySelector('.product-images-carousel');
        if (!carousel) {
            return;
        }
        const thumbnails = document.querySelectorAll('.product-image-thumbnails img');
        const activeImage = document.getElementById('activeImage');
        const prevButton = document.getElementById('prevButton');
        const nextButton = document.getElementById('nextButton');

        let currentIndex = 0;

        // Инициализируем класс активного миниатюрного изображения
        thumbnails.forEach((thumbnail, index) => {
            if (thumbnail.src === activeImage.src) {
                thumbnail.classList.add('active-thumbnail');
                currentIndex = index;
            }
        });

        // Функция обновления активного изображения и миниатюры
        const updateActiveImage = (index) => {
            activeImage.src = thumbnails[index].src;
            thumbnails.forEach(thumbnail => thumbnail.classList.remove('active-thumbnail'));
            thumbnails[index].classList.add('active-thumbnail');
        };

        // Добавляем обработчики клика по миниатюрам
        thumbnails.forEach((thumbnail, index) => {
            thumbnail.addEventListener('click', () => {
                currentIndex = index;
                updateActiveImage(currentIndex);
            });
        });

        // Обработчик клика для кнопки "предыдущий"
        prevButton.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + thumbnails.length) % thumbnails.length;
            updateActiveImage(currentIndex);
        });

        // Обработчик клика для кнопки "следующий"
        nextButton.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % thumbnails.length;
            updateActiveImage(currentIndex);
        });
    }

    // Инициализация мобильных фильтров
    const initMobileFilters = () => {
        const filterButton = document.querySelector('.show-filters-button');
        const sidebar = document.querySelector('.search-products-sidebar');
        const closeButton = document.querySelector('.close-filters-button');

        if (!filterButton) return;

        // При нажатии на кнопку фильтры открываем или закрываем панель
        filterButton.addEventListener('click', () => {
            if (sidebar.classList.contains('opened')) {
                sidebar.classList.remove('opened')
            } else {
                sidebar.classList.add('opened')
            }
        });

        // При нажатии на кнопку закрытия - закрываем панель
        if (closeButton) {
            closeButton.addEventListener('click', () => {
                sidebar.classList.remove('opened')
            })
        }
    }

    // Инициализация каскадных выпадающих списков (зависимые селекты)
    const initCascadingDropdown = (parentSelector, childSelector) => {
        const parentDropdown = document.querySelector(parentSelector);
        const childDropdown = document.querySelector(childSelector);

        if (!parentDropdown || !childDropdown) return;

        // Скрываем неподходящие опции у дочернего списка при загрузке
        hideModelOptions(parentDropdown.value)

        // При смене значения родительского списка фильтруем дочерний
        parentDropdown.addEventListener('change', (ev) => {
            hideModelOptions(ev.target.value)
            childDropdown.value = ''
        });

        // Функция скрытия/показа опций в дочернем селекте на основе выбранного значения родителя
        function hideModelOptions(parentValue) {
            const models = childDropdown.querySelectorAll('option');
            models.forEach(model => {
                if (model.dataset.parent === parentValue || model.value === '') {
                    model.style.display = 'block';
                } else {
                    model.style.display = 'none';
                }
            });
        }
    }

    // Инициализация выпадающего списка сортировки
    const initSortingDropdown = () => {
        const sortingDropdown = document.querySelector('.sort-dropdown');
        if (!sortingDropdown) return;

        // При загрузке страницы устанавливаем текущее значение сортировки (если есть)
        const url = new URL(window.location.href);
        const sortValue = url.searchParams.get('sort');
        if (sortValue) {
            sortingDropdown.value = sortValue;
        }

        // При смене значения сортировки обновляем URL и перезагружаем страницу
        sortingDropdown.addEventListener('change', (ev) => {
            const url = new URL(window.location.href);
            url.searchParams.set('sort', ev.target.value);
            window.location.href = url.toString();
        });
    }

    // Вызываем все функции инициализации
    initSlider();
    initImagePicker();
    initMobileNavbar();
    imageCarousel();
    initMobileFilters();
    initCascadingDropdown('#makerSelect', '#modelSelect');
    initCascadingDropdown('#stateSelect', '#citySelect');
    initSortingDropdown()

    // Применяем эффекты анимации с помощью ScrollReveal
    ScrollReveal().reveal(".hero-slide.active .hero-slider-title", {
        delay: 200,
        reset: true,
    });
    ScrollReveal().reveal(".hero-slide.active .hero-slider-content", {
        delay: 200,
        origin: "bottom",
        distance: "50%",
    });
});
