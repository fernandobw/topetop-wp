
document.addEventListener("DOMContentLoaded", () => {

    jQuery(".part-main-banner img.main-img").addClass("zoom-in");

    // Función para manejar la lógica de la clase
    function checkScroll() {

        // Obtenemos la posición de scroll
        let scroll = jQuery(window).scrollTop();
        let nav = jQuery('nav');

        if (nav.hasClass('permanent-white')) {

            // Logo
            jQuery('.logo-color').removeClass('d-none');

            return;
        }

        // Comprobamos si el scroll es mayor a 10 píxeles
        if (scroll > 700) {

            // Si es así, añadimos la clase 'little'
            jQuery('nav.navbar').addClass('bg-tt-white');

            // Logo
            jQuery('.logo-color').removeClass('d-none');
            jQuery('.logo-blanco').addClass('d-none');

        } else {

            // Si no, la quitamos
            jQuery('nav.navbar').removeClass('bg-tt-white');

            // Logo
            jQuery('.logo-color').addClass('d-none');
            jQuery('.logo-blanco').removeClass('d-none');
        }
    }

    checkScroll();

    jQuery(window).on('scroll', checkScroll);

    const swiperExperiencias = new Swiper(".swiper.experiencias", {
        draggable: false,
        preventClicks: true,
        preventClicksPropagation: true,
        navigation: {
            nextEl: ".part-experiencia-inolvidable .swiper-button-next",
            prevEl: ".part-experiencia-inolvidable .swiper-button-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
    });

    const swiperPuntaCanaGyrofly = new Swiper(".swiper.punta-cana-gyrofly", {
        draggable: false,
        preventClicks: true,
        lazy: true,
        preventClicksPropagation: true,
        //effect: "fade",
        navigation: {
            nextEl: ".part-experiencia-inolvidable .swiper-button-next",
            prevEl: ".part-experiencia-inolvidable .swiper-button-prev",
        },
        freeMode: true,
        watchSlidesProgress: true,
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            992: {
                slidesPerView: 1,
                spaceBetween: 30,
            },
        },
    });

    var swiperPuntaCanaGyroflyThumbs = new Swiper(".swiper.punta-cana-gyrofly-thumbs", {
        slidesPerView: 4,
        centeredSlides: false,
        slidesPerGroupSkip: 4,
        slidesPerGroup: 4,
        watchSlidesProgress: true,
        navigation: {
            nextEl: ".pgf-head-wrapper button.next",
            prevEl: ".pgf-head-wrapper button.prev",
        },
        thumbs: {
            swiper: swiperPuntaCanaGyrofly,
        },
    });

    // Set active slide
    jQuery('.swiper.punta-cana-gyrofly-thumbs .swiper-slide').on('click', function () {

        const index = jQuery(this).data('index');

        // Quitar active
        jQuery('.swiper.punta-cana-gyrofly-thumbs .swiper-slide.custom-active').removeClass('custom-active');

        // Indicar nuevo activo
        jQuery(this).addClass('custom-active');

        swiperPuntaCanaGyrofly.slideToLoop(index);
    });

    const images = document.querySelectorAll('.img-lazy[data-src]');

    // Crea el observer
    const imgObserver = new IntersectionObserver((entries, imgObserver) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.getAttribute('data-src');
                img.removeAttribute('data-src');
                imgObserver.unobserve(img);
            }
        });
    }, {
        rootMargin: '0px 0px 50px 0px',
        threshold: 0.1
    });

    // Asocia el observer a cada imagen con la clase `img-lazy`
    images.forEach(img => imgObserver.observe(img));


    Fancybox.bind("[data-fancybox]", {
        // Your custom options
    });

    setTimeout(() => {
        jQuery(".part-main-banner .blur-item .image-area").addClass("floating");
    }, "2000");
});