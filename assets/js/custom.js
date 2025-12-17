// Swiper + jQuery initialization
document.addEventListener('DOMContentLoaded', function () {

    // Initialize Swiper
    const swiper = new Swiper(".mySwiper", {
        slidesPerView: 5,
        spaceBetween: 30,
        loop: true,
        freeMode: true,
        speed: 4000,
        autoplay: { delay: 0 },
        allowTouchMove: true,
        breakpoints: {
            320: { slidesPerView: 1 },
            480: { slidesPerView: 2 },
            640: { slidesPerView: 3 },
            768: { slidesPerView: 4 },
            1024: { slidesPerView: 5 }
        },
        pagination: { el: '.swiper-pagination', clickable: true }
    });

    // jQuery code
    jQuery(function ($) {

        // Desktop/mobile menu toggle
        $("#desktopIcon").click(function () {
            $("#mobileIcon").removeClass("hidden");
            $(this).addClass("hidden");
            $("#mobileNav").hide().removeClass("hidden").slideDown(300);
        });

        $("#mobileIcon").click(function () {
            $("#desktopIcon").removeClass("hidden");
            $(this).addClass("hidden");
            $("#mobileNav").slideUp(300, function () {
                $(this).addClass("hidden");
            });
        });

        // Scroll to top button
        $('#pageScroll').on("click", function () {
            $("html, body").animate({ scrollTop: 0 }, 500);
        });

        $(window).on("scroll", function () {
            if ($(this).scrollTop() > 300) {
                $("#pageScroll").fadeIn(300);
            } else {
                $("#pageScroll").fadeOut(300);
            }
        });

        // ResentDown animation
        $("#resentDown").hide();

        function cycle() {
            setTimeout(function () {
                $("#resentDown").fadeIn(400);
                $("#gradBox").stop(true, true).css("width", "100%");
                $("#gradBox").animate({ width: "0%" }, 5000, "linear");
                setTimeout(function () {
                    $("#resentDown").fadeOut(400);
                    cycle();
                }, 5000);
            }, 5000);
        }

        cycle();
    });

});
