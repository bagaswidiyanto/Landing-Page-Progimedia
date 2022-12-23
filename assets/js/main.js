(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });


    // Smooth scrolling on the navbar links
    $(".navbar-nav a").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            
            $('html, body').animate({
                scrollTop: $(this.hash).offset().top - 45
            }, 1500, 'easeInOutExpo');
            
            if ($(this).parents('.navbar-nav').length) {
                $('.navbar-nav .active').removeClass('active');
                $(this).closest('a').addClass('active');
            }
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });

     // Portofolio isotope and filter
    var portofolioIsotope = $('.portofolio-container').isotope({
        itemSelector: '.portofolio-item',
        layoutMode: 'fitRows'
    });
    $('#portofolio-flters li').on('click', function () {
        $("#portofolio-flters li").removeClass('active');
        $(this).addClass('active');

        portofolioIsotope.isotope({filter: $(this).data('filter')});
    });

    const glightbox = GLightbox({
        selector: ".glightbox",
      });

    const portfolioLightbox = GLightbox({
        selector: '.portofolio-lightbox'
    });

    var cardSlider = new Swiper('.features-slider', {
        autoplay: {
        	delay: 4000,
        	disableOnInteraction: false
        },
        loop: true,
        
        // pagination: {
        //     el: '.swiper-pagination',
        //     type: 'bullets',
        //     clickable: true
        //   },
        slidesPerView: 3,
        spaceBetween: 80,
        breakpoints: {
            // when window width is >= 480px
            480: {
                slidesPerView: 2,
                spaceBetween: 0
            },
            // when window width is >= 640px
            600: {
                slidesPerView: 2,
                spaceBetween: 0
            },
            767: {
                slidesPerView: 2,
                spaceBetween: 0
            },
            // when window is <= 991px
            991: {
                slidesPerView: 3,
                spaceBetween: 0,
            },
        }
    });

    var cardSlider = new Swiper('.testimoni-slider', {
        autoplay: false,
        loop: true,
        // {
        // 	delay: 4000,
        // 	disableOnInteraction: false
        // },
        // pagination: {
        //     el: '.swiper-pagination',
        //     type: 'bullets',
        //     clickable: true
        //   },
        slidesPerView: 3,
        spaceBetween: 80,
        breakpoints: {
            // when window width is >= 480px
            480: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            // when window width is >= 640px
            600: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            767: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            // when window is <= 991px
            991: {
                slidesPerView: 3,
                spaceBetween: 0,
            },
        }
    });

    var cardSlider = new Swiper('.needs-slider', {
        autoplay: false,
        loop: true,
        // {
        // 	delay: 4000,
        // 	disableOnInteraction: false
        // },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
        slidesPerView: 2,
        spaceBetween: 20,
        breakpoints: {
            // when window width is >= 480px
            480: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            // when window width is >= 640px
            600: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            767: {
                slidesPerView: 2,
                spaceBetween: 0
            },
            // when window is <= 991px
            991: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
        }
    });
    
})(jQuery);

