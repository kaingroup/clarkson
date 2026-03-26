<!-- jquery
		============================================ -->
    <script src="<?php echo $urls->templates?>js/vendor/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $urls->templates?>js/vendor/jquery-migrate-3.3.2.min.js"></script>

    <!-- bootstrap js
		============================================ -->
    <script src="<?php echo $urls->templates?>js/bootstrap.bundle.min.js"></script>

    <!-- jQuery REVOLUTION Slider  -->
    <script src="<?php echo $urls->templates?>rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo $urls->templates?>rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?php echo $urls->templates?>rs-plugin/js/rs.home.js"></script>

    <!-- owl.carousel.min js
		============================================ -->
    <script src="<?php echo $urls->templates?>js/owl.carousel.min.js"></script>

    <!-- jquery.sidr.min js
        ============================================ -->
    <script src="<?php echo $urls->templates?>js/jquery.sidr.min.js"></script>

    <!-- jflickrfeed.min js
        ============================================ -->
    <script src="<?php echo $urls->templates?>js/jflickrfeed.min.js"></script>

    <!-- jqueryui js
        ============================================ -->
    <script src="<?php echo $urls->templates?>js/jquery.fancybox.js"></script>

    <!-- jquery.mixitup.min js
        ============================================ -->
    <script src="<?php echo $urls->templates?>js/jquery.mixitup.min.js"></script>

    <!-- countown js
        ============================================ -->
    <script src="<?php echo $urls->templates?>js/jquery.countdown.min.js"></script>

    <!-- jquery scrollUp min js
        ============================================ -->
    <script src="<?php echo $urls->templates?>js/jquery.scrollUp.min.js"></script>

    <!-- counterup min js
        ============================================ -->
    <script src="<?php echo $urls->templates?>js/counterup.min.js"></script>

    <!-- waypoints min js
        ============================================ -->
    <script src="<?php echo $urls->templates?>js/waypoints.min.js"></script>

    <script src="<?php echo $urls->templates?>js/particles.js"></script>

    <!-- wow js
		============================================ -->
    <script src="<?php echo $urls->templates?>js/wow.js"></script>
    <script>
        new WOW().init();
    </script>
    <!-- plugins js
		============================================ -->
    <script src="<?php echo $urls->templates?>js/plugins.js"></script>

    <!-- main js
		============================================ -->
    <script src="<?php echo $urls->templates?>js/main.js"></script>
    <script>
        var stickyNavTop = $('.home5-sticky').offset().top;

        var stickyNav = function () {
            var scrollTop = $(window).scrollTop();

            if (scrollTop > stickyNavTop) {
                $('.home5-sticky').addClass('sticky');
            } else {
                $('.home5-sticky').removeClass('sticky');
            }
        };

        stickyNav();

        $(window).scroll(function () {
            stickyNav();
        });
    </script>