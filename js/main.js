/*!
 * main.js
 * by Patrick Hurley
 *
 */

/* Feature Image Letterbox */
if ( ! Modernizr.objectfit ) {
  $('.page__image-container').each(function () {
    var $container = $(this);
    imgUrl = $('.page__featured-image').attr('src');

    if (imgUrl) {
      $container
        .css('backgroundImage', 'url(' + imgUrl + ')')
        .addClass('compat-object-fit');
    }  
  });
}

/* Slick Carousel */
$('.carousel-wraparound').flickity({
  // options
  wrapAround: true,
  autoPlay: true,
  autoPlay: 4000,
  imagesLoaded: true
});

$('.carousel-single').flickity({
  // options
  imagesLoaded: true
});



/* Headhesive */
var options = {
    offset: 100,
    offsetSide: 'top',
    classes: {
        clone:   'banner--clone',
        stick:   'banner--stick',
        unstick: 'banner--unstick'
    }
};


// Initialise with options
var banner = new Headhesive('.navbar', options); 

// toggle navbar fix (no data attributes), as headhesive conflict
$('.navbar-toggle').on('click', function () {
  $('.collapse').collapse('toggle');
});


/* Isotope */
jQuery(window).on('load', function(){
  // init Isotope (portfolio-grid)
  var $grid = $('#portfolio-grid').isotope({
    // options
    itemSelector: '.portfolio-grid-item'
  });

  // layout Isotope after each image loads
  $grid.imagesLoaded().progress( function() {
    $grid.isotope('layout');
  });

  // filter items on button click
  $('.filter-button-group').on( 'click', 'a', function() {
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({ filter: filterValue });
  });

  // init masonry grid
  var $masonrygrid = $('.masonry-grid').isotope({
    itemSelector: '.masonry-grid-item',
    percentPosition: true,
    masonry: {
      columnWidth: '.masonry-grid-sizer'
    }
  });

  $masonrygrid.imagesLoaded().progress( function() {
    $masonrygrid.isotope('layout');
  });

  // filter items on button click
  $('.filter-button-group').on( 'click', 'a', function() {
    var filterValue = $(this).attr('data-filter');
    $masonrygrid.isotope({ filter: filterValue });
  });
});

/* Parallax (Paroller) */

// initialise for sm screens and larger
if (Modernizr.mq('(min-width: 768px)')) {
  $(".parallax-container").paroller();
}
// reload paroller on screen resize
// so that it isn't thrown off by isotope positioning
$(window).resize(function() { 
  if (Modernizr.mq('(min-width: 768px)')) {
    $(".parallax-container").paroller();
  }
});


/* Google Map */
function initMap() {

  var location = new google.maps.LatLng(50.822828, -0.148284);

  var mapOptions = {
        
        zoom: 16,

        mapTypeControl: false,
        scaleControl: false,
        scrollwheel: false,
        navigationControl: false,
        streetViewControl: false,
        zoomControl: false,

        // The latitude and longitude to center the map (always required)
        center: location,
        // How you would like to style the map. 
        // This is where you would paste any style found on Snazzy Maps.
        styles: [{"featureType":"administrative","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":"50"},{"visibility":"simplified"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"lightness":"30"}]},{"featureType":"road.local","elementType":"all","stylers":[{"lightness":"40"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"lightness":-25},{"saturation":-100}]}]
    };

    // Get the HTML DOM element that will contain your map 
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map');

    // Create the Google Map 
    var map = new google.maps.Map(mapElement, mapOptions);

    // Custom icon
    var image = 'img/grey-pin.png';

    var marker = new google.maps.Marker({
        position: location,
        map: map,
        icon: image,
        title: 'Snazzy!'
    });

    // Re-centre on resize
    google.maps.event.addDomListener(window, "resize", function() {
       var center = map.getCenter();
       google.maps.event.trigger(map, "resize");
       map.setCenter(center); 
    });

}

/* Preloader */
$(window).on('load', function() { // makes sure the whole site is loaded 
  $('#preloader-status').fadeOut(); // will first fade out the loading animation 
  $('#preloader').delay(350).fadeOut(); // will fade out the white DIV that covers the website. 
  $('body').delay(350).css({'overflow':'visible'});
})

/* Back to Top */
// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(300);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 1000);
});

// Navbar hover for large screen only
$('.dropdown').on('mouseenter mouseleave click tap', function(event) {
  if ((window.innerWidth >= 1200) && (!$('.navbar-toggle').is(':visible'))) {
      $(this).toggleClass("open");
  }
});