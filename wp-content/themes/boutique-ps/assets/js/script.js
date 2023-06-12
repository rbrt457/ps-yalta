document.addEventListener('DOMContentLoaded', () => {
    new Swiper('.js-room-slider', {
        loop: true,
        spaceBetween: 16,
        slidesPerView: 'auto'
    })

    new Swiper('.js-gallery-swiper', {
        loop: true,
        spaceBetween: 16,
        slidesPerView: 1,
        breakpoints: {
            1200: {
                slidesPerView: 3,
            },
            768: {
                slidesPerView: 2,
            }
        },
        navigation:{
            prevEl:'.room-detail__gallery .slider-control__prev',
            nextEl:'.room-detail__gallery .slider-control__next'
        }
    })

    new Swiper('.js-other-rooms', {
        loop: false,
        spaceBetween: 16,
        slidesPerView: 1,
        breakpoints: {
            1200: {
                slidesPerView: 3,
            },
            768: {
                slidesPerView: 2,
            }
        },
        navigation:{
            prevEl:'.other-rooms .slider-control__prev',
            nextEl:'.other-rooms .slider-control__next'
        }
    })

    new Swiper('.js-room-detail-swiper', {
        allowTouchMove: false,
        loop: true,
        speed: 1500,
        autoplay: {
            delay: 3000,

        }

    })

    new Swiper('.js-beach', {
        loop: true,
        spaceBetween: 16,
        slidesPerView: 1,
        breakpoints: {
            1200: {
                slidesPerView: 3,
            },
            768: {
                slidesPerView: 2,
            }
        },
        navigation:{
            prevEl:'.beach .slider-control__prev',
            nextEl:'.beach .slider-control__next'
        }
    })

    $('.js-burger').click(function () {
        $(this).toggleClass('open')
        $('.js-mobile-menu').toggleClass('show')
    })
    mapActivation();
})

function mapActivation() {
    const yandexMap = document.querySelector('#js-yandex-map')

    const yandexMapPopup = document.createElement('div');
    yandexMapPopup.className = 'yandex-map__popup';

    yandexMapPopup.textContent = 'Кликните для активации';

    yandexMap.appendChild(yandexMapPopup);
    yandexMap.onclick = function () {
        this.children[0].removeAttribute('style');
        yandexMapPopup.parentElement.removeChild(yandexMapPopup);
    }
    yandexMap.onmousemove = function (event) {
        yandexMapPopup.style.display = 'block';
        if (event.offsetY > 10) yandexMapPopup.style.top = event.offsetY + 20 + 'px';
        if (event.offsetX > 10) yandexMapPopup.style.left = event.offsetX + 20 + 'px';
    }
    yandexMap.onmouseleave = function () {
        yandexMapPopup.style.display = 'none';
    }
}
