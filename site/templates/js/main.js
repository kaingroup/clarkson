(function ($) {

    "use strict";

    /*=========================
     Active flickr
    ===========================*/
    $('#flickr_feed').jflickrfeed({
        limit: 12,
        qstrings: {
            id: '95572727@N00'
        },
        itemTemplate:
            '' +

            '<a data-gal="fancybox[flickrgallery]" href="{{image}}" title="{{title}}">' +

            '<img src="{{image_s}}" alt="{{title}}" />' +

            '</a>' +

            ''
    }, function (data) {
        $('.flickr_feed a').fancybox();
    });

    /*=========================
     fancybox
    ===========================*/
    $('.fancybox').fancybox();

    /*=========================
     screenshot-image-median
    ===========================*/
    $(".screenshot-image-meddin").owlCarousel({
        autoPlay: 6000,
        slideSpeed: 1000,
        paginationSpeed: 1000,
        navigation: false,
        pagination: false,
        items: 1,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [767, 1],
        itemsMobile: [480, 1]
    });

    /*=========================
     testimonial carosel
    ===========================*/

    $(".testimonial-carosel").owlCarousel({
        autoPlay: 6000,
        slideSpeed: 1000,
        paginationSpeed: 1000,
        navigation: false,
        pagination: true,
        singleItem: true,
        transitionStyle: "fadeUp",
        items: 1,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [979, 1]
    });

    /*=========================
     demane-slide
    ==========================*/
    $(".demane-slide").owlCarousel({
        autoPlay: 6000000,
        slideSpeed: 1000,
        paginationSpeed: 1000,
        items: 2,
        itemsDesktop: [1199, 2],
        itemsDesktopSmall: [979, 2],
        itemsTablet: [767, 2],
        itemsMobile: [480, 1],
    });

    /*=========================
     popular-slide6
    ===========================*/

    $(".popular-slide6").owlCarousel({
        navigation: true,
        pagination: true,
        slideSpeed: 600,
        paginationSpeed: 400,
        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3],
        itemsTablet: [767, 2],
        itemsMobile: [480, 1],
        navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
    });

    /*=========================
     recent-post-slide6
    ===========================*/

    $(".recent-post-slide6").owlCarousel({
        navigation: true,
        pagination: true,
        slideSpeed: 600,
        paginationSpeed: 400,
        items: 1,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [767, 1],
        itemsMobile: [480, 1],
        navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
    });

    /*=========================
     testimonial4
    ===========================*/

    $(".testimonial4").owlCarousel({
        autoPlay: 600000000,
        slideSpeed: 1000,
        paginationSpeed: 1500,
        navigation: false,
        pagination: false,
        items: 1,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [767, 1],
        itemsMobile: [480, 1]
    });

    /*=========================
     testimonials-carousel (3 items)
    ===========================*/

    $(".testimonials-carousel").owlCarousel({
        autoPlay: 5000,
        slideSpeed: 800,
        paginationSpeed: 1000,
        navigation: true,
        pagination: true,
        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 2],
        itemsTablet: [767, 2],
        itemsMobile: [480, 1],
        navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
    });

    /*=========================
     testimonial4
    ===========================*/

    $(".work-freame9").owlCarousel({
        autoPlay: 6000,
        slideSpeed: 1000,
        paginationSpeed: 1500,
        navigation: false,
        pagination: true,
        items: 1,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [767, 1],
        itemsMobile: [480, 1]
    });

    /*=========================
     emargency-carosel
    ===========================*/

    $(".emargency-carosel").owlCarousel({
        autoPlay: 6000000,
        slideSpeed: 1000,
        paginationSpeed: 1500,
        navigation: false,
        pagination: true,
        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3]
    });

    /*=========================
     owl carosel for Our Office page
    ===========================*/

    $("#owl-demo-two").owlCarousel({
        autoPlay: 6000000,
        slideSpeed: 1000,
        paginationSpeed: 1500,
        navigation: true,
        pagination: false,
        items: 1,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [767, 1],
        itemsMobile: [480, 1]
    });

    /*---------------------
     team-2-curosel
    --------------------- */

    $(".team-2-curosel").owlCarousel({
        autoPlay: 6000000,
        slideSpeed: 1000,
        paginationSpeed: 1500,
        navigation: true,
        pagination: false,
        items: 5,
        itemsDesktop: [1199, 5],
        itemsDesktopSmall: [979, 5]
    });


    /*=========================
     about2-slide-baner
    ===========================*/

    $(".about2-slide-baner").owlCarousel({
        autoPlay: 6000000,
        slideSpeed: 1000,
        paginationSpeed: 1500,
        navigation: false,
        pagination: false,
        items: 1,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [767, 1],
        itemsMobile: [480, 1]
    });

    /*=========================
     testimonial-list
    ===========================*/

    $(".testimonial-list").owlCarousel({
        autoPlay: 6000000,
        slideSpeed: 1000,
        paginationSpeed: 1500,
        navigation: false,
        pagination: false,
        items: 1,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [767, 1],
        itemsMobile: [480, 1]
    });

    /*=================================
     Owl Carousel for Our Office page
    ===================================*/

    $(".showcase-slider").owlCarousel({
        autoPlay: 6000000,
        slideSpeed: 1000,
        paginationSpeed: 1500,
        navigation: false,
        pagination: true,
        items: 4,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [979, 4]
    });

    /*=========================
     tooltip
    ===========================*/

    // $('[data-bs-toggle="tooltip"]').tooltip();
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    /*=========================
     countdown
    ===========================*/

    $('[data-countdown]').each(function () {
        const $this = $(this), finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function (event) {
            $this.html(event.strftime('<span class="cdown days"><span class="time-count">%-D :</span> <p>Days</p></span> <span class="cdown hour"><span class="time-count">%-H :</span> <p>Hour</p></span> <span class="cdown minutes"><span class="time-count">%M :</span> <p>Min</p></span> <span class="cdown second"> <span><span class="time-count">%S</span> <p>Sec</p></span>'));
        });
    });

    /*=========================
     mixitup
    ===========================*/

    $(".work-item7").mixitup({
        effects: ['fade', 'rotateZ'],
        easing: 'snap'
    });

    /*=========================
     counterUp
    ===========================*/

    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });

    /*=========================
     scrollUp
    ==========================*/

    $.scrollUp({
        scrollText: '<i class="fa fa-chevron-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });

    /*=========================
     accordion
    ===========================*/

    function toggleChevron(e) {
        $(e.target)
            .prev('.panel-heading')
            .find("i.indicator")
            .toggleClass('glyphicon glyphicon-plus glyphicon glyphicon-minus');
    }

    const accordion = document.querySelector('#accordion');
    if (accordion) {
        accordion.addEventListener('hidden.bs.collapse', toggleChevron)
        accordion.addEventListener('shown.bs.collapse', toggleChevron)
    }

    /*=========================
     Circular Bars - Knob
    ===========================*/

    if (typeof ($.fn.knob) != 'undefined') {
        $('.knob').each(function () {
            const $this = $(this),
                knobVal = $this.attr('data-rel');

            $this.knob({
                'draw': function () {
                    $(this.i).val(this.cv + '%');
                }
            });


            $this.appear(function () {
                $({
                    value: 0
                }).animate({
                    value: knobVal
                }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function () {
                        $this.val(Math.ceil(this.value)).trigger('change');
                    }
                });
            }, {accX: 0, accY: -150});
        });
    }

    /*--------------------------
       faq-accordion
    *--------------------------*/
    const faqAccordion = $(".faq-accordion");
    if (faqAccordion.length > 0) {
        faqAccordion.collapse({
            accordion: true,
            open: function () {
                this.slideDown(550);
            },

            close: function () {
                this.slideUp(550);
            }
        });
    }

    /*------------------------------
       contact-accordion
    *---------------------------*/
    const contactAccordion = $(".contact-accordion");
    if (contactAccordion.length > 0) {
        contactAccordion.collapse({
            accordion: true,
            open: function () {
                this.slideDown(550);
            },

            close: function () {
                this.slideUp(550);
            }
        });
    }

    /*-------------------------
       qa-accordion
    *------------------------*/
    const qaAccordion = $(".qa-accordion");
    if (qaAccordion.length > 0) {
        qaAccordion.collapse({
            accordion: true,
            open: function () {
                this.slideDown(550);
            },

            close: function () {
                this.slideUp(550);
            }
        });
    }

    /*=========================
     Sidr Responsive Menu
    ===========================*/
    const rightMenu = $('#right-menu');
    rightMenu.sidr({
        name: 'sidr-right',
        side: 'right'
    });

    $('#simple-menu').sidr();


    /*------------------------
      Side menu trigger icon
    *--------------------------*/

    rightMenu.on('click', function () {
        $(this).children('.fa').toggleClass('fa-close');
        $(this).children('.fa').toggleClass('fa-bars');
    });
    
    /*--------------------------------
    Ajax Contact Form
-------------------------------- */
$(function () {
    // Get the form.
    var form = $('#contact-form');
    // Get the messages div.
    var formMessages = $('.form-message');
    // Set up an event listener for the contact form.
    $(form).submit(function (e) {
        // Stop the browser from submitting the form.
        e.preventDefault();
        // Serialize the form data.
        var formData = $(form).serialize();
        // Submit the form using AJAX.
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData,
        })
            .done(function (response) {
                // Make sure that the formMessages div has the 'success' class.
                $(formMessages).removeClass('error');
                $(formMessages).addClass('success');

                // Set the message text.
                $(formMessages).text(response);

                // Clear the form.
                $('#contact-form input,#contact-form textarea').val('');
            })
            .fail(function (data) {
                // Make sure that the formMessages div has the 'error' class.
                $(formMessages).removeClass('success');
                $(formMessages).addClass('error');

                // Set the message text.
                if (data.responseText !== '') {
                    $(formMessages).text(data.responseText);
                } else {
                    $(formMessages).text(
                        'Oops! An error occured and your message could not be sent.'
                    );
                }
            });
    });
});


})(jQuery);

   