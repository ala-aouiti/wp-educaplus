;
(function($) {
    "use strict";
    var WidgetTestimonialCarouselHandler = function($scope, $) {
        var carousel_elem = $scope.find('.edubin-testimonial-activation').eq(0);
        if (carousel_elem.length > 0) {
            var settings = carousel_elem.data('settings');
            var arrows = settings['arrows'];
            var arrow_prev_txt = settings['arrow_prev_txt'];
            var arrow_next_txt = settings['arrow_next_txt'];
            var testimonial_style_ck = parseInt(settings['testimonial_style_ck']) || 1;
            var dots = settings['dots'];
            var autoplay = settings['autoplay'];
            var autoplay_speed = parseInt(settings['autoplay_speed']) || 3000;
            var animation_speed = parseInt(settings['animation_speed']) || 300;
            var pause_on_hover = settings['pause_on_hover'];
            var center_mode = settings['center_mode'];
            var center_padding = parseInt(settings['center_padding']) || 50;
            var center_padding = center_padding.toString();
            var display_columns = parseInt(settings['display_columns']) || 1;
            var scroll_columns = parseInt(settings['scroll_columns']) || 1;
            var tablet_width = parseInt(settings['tablet_width']) || 800;
            var tablet_display_columns = parseInt(settings['tablet_display_columns']) || 1;
            var tablet_scroll_columns = parseInt(settings['tablet_scroll_columns']) || 1;
            var mobile_width = parseInt(settings['mobile_width']) || 480;
            var mobile_display_columns = parseInt(settings['mobile_display_columns']) || 1;
            var mobile_scroll_columns = parseInt(settings['mobile_scroll_columns']) || 1;
            if (testimonial_style_ck == 5) {
                var carousel_elem_for = $scope.find('.edubin-testimonial-activation .edubin-testimonial-for').eq(0);
                var carousel_elem_nav = $scope.find('.edubin-testimonial-activation .edubin-testimonal-nav').eq(0);
                carousel_elem_for.slick({
                    slidesToShow: 1,
                    slidesToScroll: scroll_columns,
                    arrows: arrows,
                    prevArrow: '<button class="edubin-carosul-prev"><i class="' + arrow_prev_txt + '"></i></button>',
                    nextArrow: '<button class="edubin-carosul-next"><i class="' + arrow_next_txt + '"></i></button>',
                    dots: dots,
                    fade: true,
                    asNavFor: '.edubin-testimonal-nav'
                });
                carousel_elem_nav.slick({
                    slidesToShow: display_columns,
                    slidesToScroll: scroll_columns,
                    asNavFor: '.edubin-testimonial-for',
                    dots: false,
                    arrows: false,
                    centerMode: center_mode,
                    focusOnSelect: true,
                    centerPadding: center_padding,
                });
            } else {
                carousel_elem.slick({
                    arrows: arrows,
                    prevArrow: '<button class="edubin-carosul-prev"><i class="' + arrow_prev_txt + '"></i></button>',
                    nextArrow: '<button class="edubin-carosul-next"><i class="' + arrow_next_txt + '"></i></button>',
                    dots: dots,
                    infinite: true,
                    autoplay: autoplay,
                    autoplaySpeed: autoplay_speed,
                    speed: animation_speed,
                    fade: false,
                    pauseOnHover: pause_on_hover,
                    slidesToShow: display_columns,
                    slidesToScroll: scroll_columns,
                    centerMode: center_mode,
                    centerPadding: center_padding,
                    responsive: [{
                        breakpoint: tablet_width,
                        settings: {
                            slidesToShow: tablet_display_columns,
                            slidesToScroll: tablet_scroll_columns
                        }
                    }, {
                        breakpoint: mobile_width,
                        settings: {
                            slidesToShow: mobile_display_columns,
                            slidesToScroll: mobile_scroll_columns
                        }
                    }]
                });
            }
        }
    }
    // Carousel Handler
    var WidgetEdubinCarouselHandler = function($scope, $) {
        var carousel_elem = $scope.find('.edubin-carousel-activation').eq(0);
        if (carousel_elem.length > 0) {
            var settings = carousel_elem.data('settings');
            var arrows = settings['arrows'];
            var arrow_prev_txt = settings['arrow_prev_txt'];
            var arrow_next_txt = settings['arrow_next_txt'];
            var dots = settings['dots'];
            var autoplay = settings['autoplay'];
            var autoplay_speed = parseInt(settings['autoplay_speed']) || 3000;
            var animation_speed = parseInt(settings['animation_speed']) || 300;
            var pause_on_hover = settings['pause_on_hover'];
            var center_mode = settings['center_mode'];
            var center_padding = settings['center_padding'] ? settings['center_padding'] : '50px';
            var display_columns = parseInt(settings['display_columns']) || 1;
            var scroll_columns = parseInt(settings['scroll_columns']) || 1;
            var tablet_width = parseInt(settings['tablet_width']) || 800;
            var tablet_display_columns = parseInt(settings['tablet_display_columns']) || 2;
            var tablet_scroll_columns = parseInt(settings['tablet_scroll_columns']) || 2;
            var mobile_width = parseInt(settings['mobile_width']) || 480;
            var mobile_display_columns = parseInt(settings['mobile_display_columns']) || 1;
            var mobile_scroll_columns = parseInt(settings['mobile_scroll_columns']) || 1;
            var carousel_style_ck = parseInt(settings['carousel_style_ck']) || 1;
            if (carousel_style_ck == 4) {
                carousel_elem.slick({
                    arrows: arrows,
                    prevArrow: '<button class="edubin-carosul-prev"><i class="' + arrow_prev_txt + '"></i></button>',
                    nextArrow: '<button class="edubin-carosul-next"><i class="' + arrow_next_txt + '"></i></button>',
                    dots: dots,
                    customPaging: function(slick, index) {
                        var data_title = slick.$slides.eq(index).find('.edubin-data-title').data('title');
                        return '<h6>' + data_title + '</h6>';
                    },
                    infinite: true,
                    autoplay: autoplay,
                    autoplaySpeed: autoplay_speed,
                    speed: animation_speed,
                    fade: false,
                    pauseOnHover: pause_on_hover,
                    slidesToShow: display_columns,
                    slidesToScroll: scroll_columns,
                    centerMode: center_mode,
                    centerPadding: center_padding,
                    responsive: [{
                        breakpoint: tablet_width,
                        settings: {
                            slidesToShow: tablet_display_columns,
                            slidesToScroll: tablet_scroll_columns
                        }
                    }, {
                        breakpoint: mobile_width,
                        settings: {
                            slidesToShow: mobile_display_columns,
                            slidesToScroll: mobile_scroll_columns
                        }
                    }]
                });
            } else {
                carousel_elem.slick({
                    arrows: arrows,
                    prevArrow: '<button class="edubin-carosul-prev"><i class="' + arrow_prev_txt + '"></i></button>',
                    nextArrow: '<button class="edubin-carosul-next"><i class="' + arrow_next_txt + '"></i></button>',
                    dots: dots,
                    infinite: true,
                    autoplay: autoplay,
                    autoplaySpeed: autoplay_speed,
                    speed: animation_speed,
                    fade: false,
                    pauseOnHover: pause_on_hover,
                    slidesToShow: display_columns,
                    slidesToScroll: scroll_columns,
                    centerMode: center_mode,
                    centerPadding: center_padding,
                    responsive: [{
                        breakpoint: tablet_width,
                        settings: {
                            slidesToShow: tablet_display_columns,
                            slidesToScroll: tablet_scroll_columns
                        }
                    }, {
                        breakpoint: mobile_width,
                        settings: {
                            slidesToShow: mobile_display_columns,
                            slidesToScroll: mobile_scroll_columns
                        }
                    }]
                });
            }
        }
    }
    /*============= AOS ==============*/
    var WidgetAosHandler = function($scope, $) {
        $(function() {
            AOS.init({
                duration: 1200,
                once: true,
            });
        })
    }
    //======== Edubin Slider =========
    var WidgetEdubinSliderHandler = function($scope, $) {
        var carousel_elem = $scope.find('.edubin-slider-carousel').eq(0);
        if (carousel_elem.length > 0) {
            var settings = carousel_elem.data('settings');
            var autoplay = settings['autoplay'];
            var arrows = settings['arrows'];
            var autoplay_speed = parseInt(settings['autoplay_speed']) || 12000;
            var animation_speed = parseInt(settings['animation_speed']) || 300;
            var pause_on_hover = settings['pause_on_hover'];
            var pause_on_hover = settings['pause_on_hover'];
            var mouse_drag = settings['mouse_drag'];
            var touch_drag = settings['touch_drag'];
            carousel_elem.owlCarousel({
                loop: true,
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                mouseDrag: mouse_drag,
                touchDrag: touch_drag,
                margin: 0,
                nav: arrows,
                navText: ['<span class="flaticon-back"></span>', '<span class="flaticon-next"></span>'],
                autoplay: autoplay,
                autoplayHoverPause: pause_on_hover,
                autoplayTimeout: autoplay_speed,
                smartSpeed: animation_speed,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1200: {
                        items: 1
                    }
                }
            });
        }
    }
    // Run this code under Elementor.
    $(window).on('elementor/frontend/init', function() {
        elementorFrontend.hooks.addAction('frontend/element_ready/edubin-testimonial-addons.default', WidgetTestimonialCarouselHandler);
        elementorFrontend.hooks.addAction('frontend/element_ready/edubin-lp-course-addons.default', WidgetEdubinCarouselHandler);
        elementorFrontend.hooks.addAction('frontend/element_ready/edubin-slider-addons.default', WidgetEdubinSliderHandler);
        elementorFrontend.hooks.addAction('frontend/element_ready/edubin-icon-category-addons.default', WidgetEdubinCarouselHandler);
        elementorFrontend.hooks.addAction('frontend/element_ready/edubin-course-category-custom-addons.default', WidgetEdubinCarouselHandler);
        elementorFrontend.hooks.addAction('frontend/element_ready/edubin-course-category-addons.default', WidgetEdubinCarouselHandler);
        elementorFrontend.hooks.addAction('frontend/element_ready/edubin-lpcourse-addons.default', WidgetEdubinCarouselHandler);
        elementorFrontend.hooks.addAction('frontend/element_ready/edubin-tutor-course-addons.default', WidgetEdubinCarouselHandler);
        elementorFrontend.hooks.addAction('frontend/element_ready/edubin-sensei-course.default', WidgetEdubinCarouselHandler);
        elementorFrontend.hooks.addAction('frontend/element_ready/edubin-ldcourse-addons.default', WidgetEdubinCarouselHandler);
        elementorFrontend.hooks.addAction('frontend/element_ready/edubin-ld-group-course.default', WidgetEdubinCarouselHandler);
        elementorFrontend.hooks.addAction('frontend/element_ready/edubin-woo-product-addons.default', WidgetEdubinCarouselHandler);
        elementorFrontend.hooks.addAction('frontend/element_ready/edubin-services-box.default', WidgetEdubinCarouselHandler);
        elementorFrontend.hooks.addAction('frontend/element_ready/edubin-section-2.default', WidgetAosHandler);
        elementorFrontend.hooks.addAction('frontend/element_ready/edubin-section-3.default', WidgetAosHandler);
        elementorFrontend.hooks.addAction('frontend/element_ready/edubin-section-4.default', WidgetAosHandler);
        elementorFrontend.hooks.addAction('frontend/element_ready/edubin-section-5.default', WidgetAosHandler);
    });
})(jQuery);