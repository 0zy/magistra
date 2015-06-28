// Hello.
//
// This is the js scripts for MobyApp Landing Page Template
//
// Author: JLP Media
// Email: jennpereira13@gmail.com / lianplameras@gmail.com
// Version: 1.0
// Date Created: September 5, 2014



jQuery(document).ready(function($) {
   'use strict';

    //Preloader Script
        $(window).load(function() {
            // makes sure the whole site is loaded
            $('#status').fadeOut(); // will first fade out the loading animation
            $('#preloader').delay(1000).fadeOut('slow'); // will fade out the white DIV that covers the website.
            $('body').delay(350).css({'overflow':'visible'});
        });

    /* =================================
===  VIDEO BACKGROUND           ====
=================================== */
$(document).ready(function() {
    var videobackground = new $.backgroundVideo($('body'), {
      "align": "centerXY",
      "width": 1280,
      "height": 720,
      "path": "/video/",
      "filename": "video",
      "types": ["mp4","ogg","webm"]
    });
  });
	    
    // This is the jQuery for Page Smooth Scrolling Feature
    $(function() {
        $('a.page-scroll').bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
            }, 
                1500, 'easeInOutExpo');
                event.preventDefault();
            });
        });


    //Script Use for Review and Sccreenshots Slider 
    $(document).ready(function() {
        // Reviews Carousel using Owl Carousel Plugin
        $("#owl-reviews").owlCarousel({
            navigation : false, 
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem:true,
            pagination: true,
            autoHeight : true,
            autoPlay : true,
        });

        // Screenshots Carousel using Owl Carousel Plugin
        $('#owl-screenshots').owlCarousel({
            items : 5,
            itemsDesktop : [1199,5],
            itemsDesktopSmall : [980,4],
            itemsTablet: [768,3],
            itemsTabletSmall: [550,2],
            itemsMobile : [480,2],
        });

        // The effect to use when showing the lightbox using nivoLightbox Plugin
        $('#owl-screenshots a').nivoLightbox({
            effect: 'fall',                             
        });
 
    });


    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top'
    });


    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function() {
        $('.navbar-toggle:visible').click();
    });


    // js for About Section Accordion 
    $('.collapse').on('show.bs.collapse', function(){
      var i = $(this).parent().find('i');
      i.toggleClass('fa-minus-circle fa-plus-circle');
    }).on('hide.bs.collapse', function(){
      var i = $(this).parent().find('i');
      i.toggleClass('fa-minus-circle fa-plus-circle');
    });


    // Content Animation Effects using Wow.js Plugin 
    var wow = new WOW( {
        boxClass:     'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset:       0,          // distance to the element when triggering the animation (default is 0)
        mobile:       true,       // trigger animations on mobile devices (default is true)
        live:         true        // act on asynchronously loaded content (default is true)
        });
    wow.init();


    // Script for the Counters for Facts Section
    $('.count').each(function() {
        var $this   = $(this);
        $this.data('target', parseInt($this.html()));
        $this.data('counted', false);
        $this.html('0');
    });
    
    $(window).bind('scroll', function() {
        var speed   = 3000;
        $('.count').each(function() {
            var $this   = $(this);
            if(!$this.data('counted') && $(window).scrollTop() + $(window).height() >= $this.offset().top) {
                $this.data('counted', true);
                $this.animate({dummy: 1}, {
                    duration: speed,
                    step:     function(now) {
                        var $this   = $(this);
                        var val     = Math.round($this.data('target') * now);
                        $this.html(val);
                        if(0 < $this.parent('.value').length) {
                            $this.parent('.value').css('width', val + '%');
                        }
                    }
                });
            }
        });
    }).triggerHandler('scroll');

});


    // This is the Navigation Show when scroll effect
    $(window).scroll(function () {
        'use strict';
        mainNav();
        });

        if (matchMedia('(min-width: 992px), (max-width: 867px)').matches) {
          function mainNav() {
                var top = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;
                if (top > 40) $('.navbar-fixed-top').stop().animate({"top": '0'});

                else $('.navbar-fixed-top').stop().animate({"top": '-60'});
            }
        }

        if (matchMedia('(min-width: 867px) and (max-width: 991px)').matches) {
          function mainNav() {
                var top = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;
                if (top > 40) $('.navbar-fixed-top').stop().animate({"top": '0'});

                else $('.navbar-fixed-top').stop().animate({"top": '-120'});
            }

    }


    // Google Maps Scripts
    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        'use strict';
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 15,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(10.731688,122.550535,17),

            // Disables the default Google Maps UI components
            disableDefaultUI: true,
            scrollwheel: false,
            draggable: true,

            // How you would like to style the map. 
            // This is where you would paste any style found on Snazzy Maps.

        styles: [{
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#da2d2d"
                }, {
                    "lightness": 17
                }]
            }, {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#da2d2d"
                }, {
                    "lightness": 20
                }]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#da2d2d"
                }, {
                    "lightness": 17
                }]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "color": "#da2d2d"
                }, {
                    "lightness": 29
                }, {
                    "weight": 0.2
                }]
            }, {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#da2d2d"
                }, {
                    "lightness": 18
                }]
            }, {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#da2d2d"
                }, {
                    "lightness": 16
                }]
            }, {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#da2d2d"
                }, {
                    "lightness": 21
                }]
            }, {
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "visibility": "on"
                }, {
                    "color": "#da2d2d"
                }, {
                    "lightness": 16
                }]
            }, {
                "elementType": "labels.text.fill",
                "stylers": [{
                    "saturation": 36
                }, {
                    "color": "#da2d2d"
                }, {
                    "lightness": 40
                }]
            }, {
                "elementType": "labels.icon",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "transit",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#da2d2d"
                }, {
                    "lightness": 19
                }]
            }, {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#da2d2d"
                }, {
                    "lightness": 20
                }]
            }, {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "color": "#da2d2d"
                }, {
                    "lightness": 17
                }, {
                    "weight": 1.2
                }]
            }]
        };

        // Get the HTML DOM element that will contain your map 
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map');

        // Create the Google Map using out element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        // Custom Map Marker Icon - Customize the map-marker.png file to customize your icon
        var image = 'img/map-marker.png';
        var myLatLng = new google.maps.LatLng(10.731688,122.550535,17);
        var beachMarker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            icon: image
        });
    };


    //Mailchimp Subscription Integration
    $('.mailchimp').ajaxChimp({
        callback: mailchimpCallback,
        url: "http://jennylynpereira.us8.list-manage.com/subscribe/post?u=d594f4d2197a205cf487f3525&amp;id=a9e603bfd5" //Replace this with your own mailchimp post URL. Don t remove the "". Just paste the url inside "".  
    });

    function mailchimpCallback(resp) {
         if (resp.result === 'success') {
            $('.subscription-success').html('<i class="fa fa-thumbs-up"></i><br/>' + resp.msg).fadeIn(1000);
            $('.subscription-error').fadeOut(500);
            
        } else if(resp.result === 'error') {
            $('.subscription-error').html('<i class="fa fa-warning"></i><br/>' + resp.msg).fadeIn(1000);
        }  
    };