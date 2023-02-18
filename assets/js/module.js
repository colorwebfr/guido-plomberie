
// Slider Realisation
export const sliderRealisation = () => {
    $(document).ready(function () {
        $('.slider_real').slick({
            dots: false,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear',
            prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
            responsive: [
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
        //After
        $('.slider_real_after').slick({
            dots: false,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear',
            prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
            responsive: [
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
}

//Popin contact
export const popinContact = () => {
    $(document).ready(function () {
        $('.contact-popin-click').click(function (e) {
            e.preventDefault();
            $('.full-block-popin').show();
        });
        $('.popin-contact__close').click(function () {
            $('.full-block-popin').hide();
        });
    });
}

//Add class on scroll
export function add_class_scrollWindow() {
    window.addEventListener("DOMContentLoaded", (e) => {
        const widthScreen = window.innerWidth;
        const headerNode = document.querySelector("header");
        if (widthScreen > 864) {
            if (window.scrollY > 100) {
                headerNode.classList.add("bg-black");
            }
            else {
                headerNode.classList.remove("bg-black");
            }
            window.addEventListener("scroll", () => {
                const topHeader = window.scrollY;
                if (topHeader > 100) {
                    headerNode.classList.add("bg-black");
                }
                else {
                    headerNode.classList.remove("bg-black");
                }
            });
        }
    });
}

//redirect after submit form
export const redirect_after_submit = () => {
    const loc_current = window.location.href;
    document.addEventListener('wpcf7mailsent', function (event) {
        setTimeout(function () {
            location = loc_current;
        }, 3000);
    }, false);
}

//Redirection CF7 on Home after submit
export const redirect_after_submit_home = () => {
    setTimeout(function () {
        document.addEventListener('wpcf7mailsent', function (event) {
            location = 'https://www.plomberie-guido.fr';
        }, false);
    }, 5000);
}