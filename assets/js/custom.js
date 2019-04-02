(function($){

    /* ---------------------------------------------- /*
     * Preloader
    /* ---------------------------------------------- */

    $(window).load(function() {
        $('#status').fadeOut();
        $('#preloader').delay(350).fadeOut('slow');
    });

    $(document).ready(function() {

        $('body').scrollspy({
            target: '.navbar-custom',
            offset: 50
        });

        $('a[href*=#]').bind("click", function(e){
            var anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $(anchor.attr('href')).offset().top
            }, 1000);
            e.preventDefault();
        });

        /* ---------------------------------------------- /*
         * Background image
        /* ---------------------------------------------- */

        $('#intro').backstretch(['assets/images/bg1.jpg']);

        /* ---------------------------------------------- /*
          * Navbar
        /* ---------------------------------------------- */

        var navbar = $('.navbar');
        var navHeight = navbar.height();

        $(window).scroll(function() {
            if($(this).scrollTop() >= navHeight) {
                navbar.addClass('navbar-color');
            }
            else {
                navbar.removeClass('navbar-color');
            }
        });

        if($(window).width() <= 767) {
            navbar.addClass('custom-collapse');
        }

        $(window).resize(function() {
            if($(this).width() <= 767) {
                navbar.addClass('custom-collapse');
            }
            else {
                navbar.removeClass('custom-collapse');
            }
        });

        /* ---------------------------------------------- /*
         * Profile Logos
        /* ---------------------------------------------- */
        $('.widget-social a').popover({
            'placement': 'top',
            'trigger': 'hover'
        });

        $('.widget-social img').hover(
            function(){
               $(this).removeClass('desaturate');
            },
            function(){
               $(this).addClass('desaturate');
            }
        );

        /* ---------------------------------------------- /*
         * Easy Pie Chart
        /* ---------------------------------------------- */

        /* Chart numbers absolute centering */

        var chart = $('.chart'),
            chartNr = $('.chart-content'),
            chartParent = chart.parent();

        function centerChartsNr() {

            chartNr.css({
                top: (chart.height() - chartNr.outerHeight()) / 2
            });
        }

        if (chart.length) {

            centerChartsNr();
            $(window).resize(centerChartsNr);

            chartParent.each(function () {

                $('#skills').waypoint(function() {
                    $(this).find('.chart').easyPieChart({
                        scaleColor: false,
                        lineWidth: 18,
                        size: 178,
                        trackColor: '#ddd',
                        lineCap: 'square',
                        animate: 2000,
                        onStep: function (from, to, percent) {
                            $(this.el).find('.percent').text(Math.round(percent));
                        }
                    });
                }, { offset: '70%', triggerOnce: true });

                $(this).find('.chart').wrapAll('<div class="centertxt" />');

            });
        }

        /* ---------------------------------------------- /*
         * Count to
        /* ---------------------------------------------- */

        $('#stats').waypoint(function() {
            $('.timer').each(function() {
                counter = $(this).attr('data-count'),
                $(this).delay(6000).countTo({
                    from: 0,
                    to: counter,
                    speed: 3000, // Statistics Counter Speed
                    refreshInterval: 50
                });
            });
         }, { offset: '70%', triggerOnce: true });


        /* ---------------------------------------------- /*
         * Count from
        /* ---------------------------------------------- */

        $('#stats').waypoint(function() {
            $('.reverse-timer').each(function() {
                counter = $(this).attr('data-count'),
                $(this).delay(6000).countTo({
                    from: counter,
                    to: 0,
                    speed: 3000, // Statistics Counter Speed
                    refreshInterval: 50
                });
            });
         }, { offset: '70%', triggerOnce: true });


        /* ---------------------------------------------- /*
         * WOW Animation When You Scroll
        /* ---------------------------------------------- */

        wow = new WOW({
            mobile: false
        });
        wow.init();

        /* ---------------------------------------------- /*
         * Owl slider
        /* ---------------------------------------------- */

        $("#owl-clients").owlCarousel({
            items : 1,
            slideSpeed : 300,
            paginationSpeed : 400,
            autoPlay: 8000
        });

        /* ---------------------------------------------- /*
         * parallax
        /* ---------------------------------------------- */

        $.stellar({
            horizontalScrolling: false
        });

        /* ---------------------------------------------- /*
         * Rotate
        /* ---------------------------------------------- */

        $(".rotate").textrotator({
            animation: "dissolve",
            separator: "|",
            speed: 3000
        });

        /*============================================
        Project Preview
        ==============================================*/

        $('.portfolio-item-outer').click(function(e){
            e.preventDefault();

            var elem = $(this),
                title = elem.find('.portfolio-item-description h3').text(),
                descr = elem.find('.portfolio-description').html(),
                icons = elem.find('.portfolio-technologies').html(),
                slidesHtml = '<ul class="slides">',
                elemDataCont = elem.find('.portfolio-description');

                slides = elem.find('.portfolio-description').data('images').split(',');

            for (var i = 0; i < slides.length; ++i) {
                slidesHtml = slidesHtml + '<li><img src='+slides[i]+' alt=""></li>';
            }

            slidesHtml = slidesHtml + '</ul>';

            $('#portfolio-title').text(title);
            $('#portfolio-content section').html(descr);
            $('#portfolio-icons').html(icons);
            $('#portfolio-slider').html(slidesHtml);

            openProject();

        });

        function openProject(){

            $('#portfolio-preview').addClass('open');
            $('.portfolio-item-wrapper').animate({'opacity':0},300);

            setTimeout(function(){
                $('#portfolio-outer').addClass('portfolio-bg');

                $('#portfolio-preview').slideDown();
                $('.portfolio-item-wrapper').slideUp();

                $('html, body').animate({
                    scrollTop: $('#portfolio-preview').offset().top - 50
                }, 1000);

                $('#portfolio-slider').flexslider({
                    prevText: '<i class="fa fa-angle-left"></i>',
                    nextText: '<i class="fa fa-angle-right"></i>',
                    animation: 'slide',
                    slideshowSpeed: 3000,
                    useCSS: true,
                    controlNav: true,
                    pauseOnAction: false,
                    pauseOnHover: true,
                    smoothHeight: false,
                    start: function(){
                        $(window).trigger('resize');
                        $('#portfolio-preview').animate({'opacity':1},300);
                    }
                });
            },300);
        }

        function closeProject(){

            $('#portfolio-preview').removeClass('open');
            $('#portfolio-preview').animate({'opacity':0},300);

            setTimeout(function(){
                $('#portfolio-outer').removeClass('portfolio-bg');

                $('.portfolio-item-wrapper').slideDown();
                $('#portfolio-preview').slideUp();

                $('#portfolio-slider').flexslider('destroy');
                $('.portfolio-item-wrapper').animate({'opacity':1},300);
            },300);

            $('html, body').animate({
                scrollTop: $('#portfolio .headline').offset().top - 80
            }, 1000);
        }

        $('.close-preview, #portfolio-close').click(function(){
            closeProject();
        });


        /* ---------------------------------------------- /*
         * Download resume
        /* ---------------------------------------------- */
        $("#download-button").click(function(e) {

            e.preventDefault();

            window.location.href = '/assets/files/download.php';

        });


        /* ---------------------------------------------- /*
         * E-mail validation
        /* ---------------------------------------------- */

        function isValidEmailAddress(emailAddress) {
            var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
            return pattern.test(emailAddress);
        };

        /* ---------------------------------------------- /*
         * Contact form ajax
        /* ---------------------------------------------- */

        $("#contact-form").submit(function(e) {

            e.preventDefault();

            var c_name = $("#c_name").val();
            var c_email = $("#c_email").val();
            var c_message = $("#c_message ").val();
            var responseMessage = $('.ajax-response');

            if (( c_name== "" || c_email == "" || c_message == "") || (!isValidEmailAddress(c_email) )) {
                responseMessage.fadeIn(500);
                responseMessage.html('<i class="fa fa-warning"></i> Check all fields.');
            }

            else {
                $.ajax({
                    type: "POST",
                    url: "index.php",
                    dataType: 'json',
                    data: {
                        c_email: c_email,
                        c_name: c_name,
                        c_message: c_message
                    },
                    beforeSend: function(result) {
                        $('#contact-form button').empty();
                        $('#contact-form button').append('<i class="fa fa-cog fa-spin"></i> Wait...');
                    },
                    success: function(result) {
                        if(result.sendstatus == 1) {
                            responseMessage.html(result.message);
                            responseMessage.fadeIn(500);
                            $('#contact-form').fadeOut(500);
                        } else {
                            $('#contact-form button').empty();
                            $('#contact-form button').append('<i class="fa fa-retweet"></i> Try again.');
                            responseMessage.html(result.message);
                            responseMessage.fadeIn(1000);
                        }
                        $('#ajax-status').removeClass('as-active');
                    }
                });
            }

            return false;

        });

    });

})(jQuery);
