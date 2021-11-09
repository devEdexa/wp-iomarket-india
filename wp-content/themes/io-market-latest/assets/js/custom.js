$(document).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll >= 10) {
        $(".site-header").addClass("header-fixed");
    } else if ($("body").hasClass("blog-detail")) {
        $(".site-header").addClass("header-fixed");
    } else {
        $(".site-header").removeClass("header-fixed");
    }


});

$(document).ready(function () {

    

    if ($(window).width() < 797) {
        $('.page-template-edi-network .banner-text .green-color').each(function() {
            var text = $(this).text();
            $(this).text(text.replace('- ', '')); 
        });
    }
    if ($(window).width() > 465) {
        $('.page-template-solution .network-title').each(function() {
            var text = $(this).text();
            $(this).text(text.replace('-', '')); 
        });   
    }

    $('.page-template-solution .network-section .item .label .cus-title').each(function() {
        var text = $(this).text();
        $(this).text(text.replace('-', '')); 
    });

    $('.menu-item-has-children .menu-item a').each(function() {
        var text = $(this).text();
        $(this).text(text.replace('-', '')); 
    });
    
    $('.breadcrumb ul li a').each(function() {
        var text = $(this).text();
        $(this).text(text.replace('-', '')); 
    });

    $(".header-menu ul li .sub-menu").before("<span></span>");
    $('.header-menu ul li span').addClass("icon");

    if ($(window).width() < 1200) {
        // Mobile Menu start
        $('.header-menu ul li .icon').click(function () {
            $(this).parent("li").siblings("li").removeClass('show-sub-menu');
            $(this).parent("li").toggleClass('show-sub-menu');
            $(this).parent("li").siblings("li").children('.sub-menu').removeClass('show');
            $(this).next(".sub-menu").toggleClass('show');
        });
        // Mobile Menu end
    } else {
        // desktop Menu start
        $(".header-menu ul li").hover(
            function () {
                $(this).children('.sub-menu').addClass("show");
            },
            function () {
                $(this).children('.sub-menu').removeClass("show");
            }
        );
        // desktop Menu end
    }

    // blog details header start
    if ($("body").hasClass("blog-detail")) {
        $(".site-header").addClass("header-fixed blog-detail-header");
    }
    //   blog details header end

    // Mobile Menu start
    $(".mobile-menu-toggle").click(function () {
        $(".header-menu").toggleClass("show-menu"),
            $("body").toggleClass("body-stop-scroll")
    });
    $(".close-menu, .menu-bg-layer").click(function () {
        $(".mobile-menu-toggle").trigger("click")
    });

    if ($('*').hasClass('typewriter-text')) {
        typing(0, $('.typewriter-text').data('text'));
    }
    
    function typing(index, text) {
        var textIndex = 1;
        var tmp = setInterval(function() {
            if (textIndex < text[index].length + 1) {
                $('.typewriter-text').text(text[index].substr(0, textIndex));
                textIndex++;
            } else {
                setTimeout(function() {
                    backed(index, text)
                }, 2000);
                clearInterval(tmp);
            }
        }, 150);
    }

    function backed(index, text) {
        var textIndex = text[index].length;
        var tmp = setInterval(function() {
            if (textIndex + 1 > 0) {
                $('.typewriter-text').text(text[index].substr(0, textIndex));
                textIndex--;
            } else {
                index++;
                if (index == text.length) {
                    index = 0;
                }
                typing(index, text);
                clearInterval(tmp);
            }
        }, 0)
    }


    // Network section start

    var sync1 = $("#sync1");
    var sync2 = $("#sync2");
    var slidesPerPage = 5;
    var syncedSecondary = true;

    sync1.owlCarousel({
        items: 1,
        margin: 15,
        smartSpeed: 1500,
        nav: true,
        autoplay: false,
        dots: false,
        loop: true,
    }).on('changed.owl.carousel', syncPosition);

    sync2
        .on('initialized.owl.carousel', function () {
            sync2.find(".owl-item").eq(0).addClass("current");
        })
        .owlCarousel({
            items: slidesPerPage,
            dots: false,
            nav: false,
            loop: false,
            smartSpeed: 1500,
            slideBy: slidesPerPage,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        }).on('to.owl.carousel', syncPosition2);

    function syncPosition(el) {

        var count = el.item.count - 1;
        var current = Math.round(el.item.index - (el.item.count / 2) - .5);

        if (current < 0) {
            current = count;
        }
        if (current > count) {
            current = 0;
        }


        sync2
            .find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");
        var onscreen = sync2.find('.owl-item.active').length - 1;
        var start = sync2.find('.owl-item.active').first().index();
        var end = sync2.find('.owl-item.active').last().index();

        if (current > end) {
            sync2.data('owl.carousel').to(current, 500, true);
        }
        if (current < start) {
            sync2.data('owl.carousel').to(current - onscreen, 500, true);
        }
    }

    function syncPosition2(el) {
        if (syncedSecondary) {
            var number = el.item.index;
            sync1.data('owl.carousel').to(number, 500, true);
        }
    }

    sync2.on("click", ".owl-item", function (e) {
        e.preventDefault();
        var number = $(this).index();
        sync1.data('owl.carousel').to(number, 500, true);
    });
    // Network section end
    bannerlogoSlider();
    solutionSlider();
    newsSlider();
    costumersSlider();
    casestudiesSlider();
    ourbestcustomerSlider();
    // teamSlider();
    featureSlider();
    featuresliderWidth();
    opportunitiesSlider();
    sidebarstickey();
});

$(window).resize(function () {
    bannerlogoSlider();
    solutionSlider();
    newsSlider();
    costumersSlider();
    casestudiesSlider();
    ourbestcustomerSlider();
    // teamSlider();
    featureSlider();
    featuresliderWidth();
    opportunitiesSlider();
    sidebarstickey();
});
// gray effects all browser start
$(window).on("load", function () {
    // Fade in images so there isn't a color "pop" document load and then on window load
    $(".grayscale-item img").animate({ opacity: 1 }, 500);
    // clone image
    $('.grayscale-item img').each(function () {
        var el = $(this);
        el.css({ "position": "absolute" }).wrap("<div class='img_wrapper' style='display: inline-block'>").clone().addClass('img_grayscale').css({ "position": "absolute", "z-index": "998", "opacity": "0" }).insertBefore(el).queue(function () {
            var el = $(this);
            el.parent().css({ "width": this.width, "height": this.height });
            el.dequeue();
        });
        this.src = grayscale(this.src);
    });

    // Fade image 
    $('.grayscale-item img').mouseover(function () {
        $(this).parent().find('img:first').stop().animate({ opacity: 1 }, 500);
    })
    $('.img_grayscale').mouseout(function () {
        $(this).stop().animate({ opacity: 0 }, 500);
    });
    $(window).trigger("resize");
});
// Grayscale w canvas method
function grayscale(src) {
    var canvas = document.createElement('canvas');
    var ctx = canvas.getContext('2d');
    var imgObj = new Image();
    imgObj.src = src;
    canvas.width = imgObj.width;
    canvas.height = imgObj.height;
    ctx.drawImage(imgObj, 0, 0);
    var imgPixels = ctx.getImageData(0, 0, canvas.width, canvas.height);
    for (var y = 0; y < imgPixels.height; y++) {
        for (var x = 0; x < imgPixels.width; x++) {
            var i = (y * 4) * imgPixels.width + x * 4;
            var avg = (imgPixels.data[i] + imgPixels.data[i + 1] + imgPixels.data[i + 2]) / 3;
            imgPixels.data[i] = avg;
            imgPixels.data[i + 1] = avg;
            imgPixels.data[i + 2] = avg;
        }
    }
    ctx.putImageData(imgPixels, 0, 0, 0, 0, imgPixels.width, imgPixels.height);
    return canvas.toDataURL();
}

function solutionSlider() {
    if ($(window).width() < 992) {
        $('.solution-slider').owlCarousel({
            margin: 20,
            nav: true,
            loop: true,
            dots: false,
            autoplay: true,
            responsiveClass: true,
            autoplayTimeout: 7000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1,
                },
                576: {
                    items: 2,
                },
            }
        })
    } else {
        $('.solution-slider').owlCarousel('destroy')
    }
}

function opportunitiesSlider() {
    $(".opportunities-carousel").owlCarousel({
        margin: 20,
        loop: true,
        responsiveClass: true,
        autoHeight: true,
        autoplay: true,
        autoplayTimeout: 7000,
        smartSpeed: 1000,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },

            576: {
                items: 2
            },

            992: {
                items: 3
            }
        }
    });
}

function newsSlider() {
    $("#news-carousel").owlCarousel({
        margin: 20,
        loop: true,
        responsiveClass: true,
        autoHeight: true,
        autoplay: true,
        autoplayTimeout: 7000,
        smartSpeed: 1000,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },

            576: {
                items: 2
            },

            992: {
                items: 3
            }
        }
    });
}

function costumersSlider() {
    $("#costumers-carousel").owlCarousel({
        margin: 20,
        loop: true,
        responsiveClass: true,
        autoHeight: true,
        autoplay: true,
        autoplayTimeout: 7000,
        smartSpeed: 1000,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },

            576: {
                items: 2
            },

            992: {
                items: 3
            }
        }
    });
}

function casestudiesSlider() {
    if ($(window).width() < 992) {
        $('.case-studies-slider').owlCarousel({
            items: 2,
            slideBy: 1,
            nav: true,
            loop: true,
            dots: false,
            margin: 30,
            autoplay: true,
            autoplaySpeed: 1000,
            responsive: {
                0: {
                    items: 1,
                },
                578: {
                    items: 2,
                },
            }
        })
    } else {
        $('.case-studies-slider').owlCarousel('destroy')
    }
}

function ourbestcustomerSlider() {
    if ($(window).width() < 768) {
        $('.our-best-customer-list').owlCarousel({
            items: 2,
            slideBy: 1,
            nav: false,
            loop: false,
            dots: false,
            margin: 20,
            autoplay: false,
            autoplaySpeed: 1000,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2,
                },
                600: {
                    items: 3,
                }
            }
        })
    } else {
        $('.our-best-customer-list').owlCarousel('destroy')
    }
}

function bannerlogoSlider() {
    if ($(window).width() < 768) {
        $('.banner-logo-slider').owlCarousel({
            items: 2,
            slideBy: 1,
            nav: false,
            loop: false,
            dots: false,
            margin: 15,
            autoplay: false,
            autoplaySpeed: 1000,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 3,
                },
                576: {
                    items: 4,
                }
            }
        })
    } else {
        $('.banner-logo-slider').owlCarousel('destroy')
    }
}

// function teamSlider() {
//     if ($(window).width() < 992) {
//         $("#teamSlider").owlCarousel({
//             items: 2,
//             slideBy: 1,
//             nav: true,
//             loop: true,
//             dots: false,
//             margin: 20,
//             autoplay: true,
//             autoplaySpeed: 1000,
//             responsive: {
//                 0: {
//                     items: 1,
//                 },
//                 600: {
//                     items: 2,
//                 },
//             },
//         });
//     } else {
//         $("#teamSlider").owlCarousel("destroy");
//     }
// }

function featuresliderWidth() {
    var featuresliderWidth = $('.featureslider-carousel .owl-stage-outer').width();
    $('.featureslider-carousel .owl-item .text').css('max-width', featuresliderWidth + 'px');
}

function sidebarstickey() {
    if ($(window).width() > 991) {
        var headerHeight = $('.site-header').outerHeight();
        $('.blog-detail-section .blog-sidebar').css('top', headerHeight + 'px');
    }
}

function featureSlider() {
    $('.featureslider-carousel').owlCarousel({
        items: 3,
        nav: true,
        dots: true,
        autoplay: true,
        loop: true,
        center: true,
        autoplaySpeed: 200,
        smartSpeed: 200,
        touchDrag: true,
        mouseDrag: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 2.1,
                dots: false,
            },
            767: {
                items: 3,
            },
        },
    });
}

// direct browser to top right away
    if (window.location.hash)
        scroll(0, 0);
    // takes care of some browsers issue
    setTimeout(function() {
        scroll(0, 0);
    }, 1);

    $(function() {
        //your current click function
        $('.current_page_item a').on('click', function(e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: $($(this).attr('href')).offset().top - 60
            }, 300, 'swing');
        });

        // if we have anchor on the url (calling from other page)
        if (window.location.hash) {
            // smooth scroll to the anchor id
            $('html,body').animate({
                scrollTop: $(window.location.hash).offset().top - 60
            }, 300, 'swing');
        }
    });