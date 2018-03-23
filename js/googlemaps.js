(function($) {
  /*
  *  render_map
  *
  *  This function will render a Google Map onto the selected jQuery element
  *
  *  @type	function
  *  @date	8/11/2013
  *  @since	4.3.0
  *
  *  @param	$el (jQuery element)
  *  @return	n/a
  */

  function render_map($el) {
    // var
    var $markers = $el.find('.marker');

    // vars
    var args = {
      zoom: 16,
      center: new google.maps.LatLng(0, 0),
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      mapTypeControl: false,
      scaleControl: false,
      scrollwheel: false,
      navigationControl: false,
      streetViewControl: false
    };

    // create map
    var map = new google.maps.Map($el[0], args);

    // add a markers reference
    map.markers = [];

    // add markers
    $markers.each(function() {
      add_marker($(this), map);
    });

    // center map
    center_map(map);
  }

  /*
  *  add_marker
  *
  *  This function will add a marker to the selected Google Map
  *
  *  @type	function
  *  @date	8/11/2013
  *  @since	4.3.0
  *
  *  @param	$marker (jQuery element)
  *  @param	map (Google Map object)
  *  @return	n/a
  */

  function add_marker($marker, map) {
    // var
    var latlng = new google.maps.LatLng(
      $marker.attr('data-lat'),
      $marker.attr('data-lng')
    );

    // add marker Icon here
    var template = ['<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 147.05 210.34"><defs>',
    '<style>.cls-1{fill:none;}.cls-2{clip-path:url(#clip-path);}.cls-3{fill:#0d4745;}</style>',
    '<clipPath id="clip-path"><rect class="cls-1" x="1.02" y="1.45" width="145.02" height="207.43"/></clipPath></defs>',
    '<title>map-icon</title><g class="cls-2"><path class="cls-3" d="M74.23,97.19A23.94,23.94,0,1,1,98.16,73.25,23.94,23.94,0,0,1,74.23,97.19M124.8,22.68a72.55,72.55,0,0,0-102.55,0C-3.26,48.2-6.13,96.26,15.52,125.12l58,83.76,58-83.76C153.2,96.26,150.31,48.2,124.8,22.68"/></g></svg>'
    ].join('\n');

    var svgWidth = 0,
    svgHeight = 0;

    if ($(window).width() >= 1500) {
        svgWidth = 30;
        svgHeight = 72;
    } else if($(window).width() >= 1200) {
        svgWidth = 27.5;
        svgHeight = 66;
    } else if($(window).width() >= 992) {
        svgWidth = 25;
        svgHeight = 60;
    } else if($(window).width() >= 768) {
        svgWidth = 22.5;
        svgHeight = 54;
    } else if($(window).width() >= 576) {
        svgWidth = 20;
        svgHeight = 48;
    } else {
        svgWidth = 17.5;
        svgHeight = 42;
    }

    // create marker
    var marker = new google.maps.Marker({
      position: latlng,
      map: map,
      icon: {
        url: 'data:image/svg+xml;charset=UTF-8,' + encodeURIComponent(template),
        scaledSize: new google.maps.Size(svgWidth, svgHeight),
      }
    });

    // add to array
    map.markers.push(marker);

    // if marker contains HTML, add it to an infoWindow
    if ($marker.html()) {
      // create info window
      var infowindow = new google.maps.InfoWindow({
        content: $marker.html()
      });

      // show info window when marker is clicked
      google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map, marker);
      });
    }
  }

  /*
  *  center_map
  *
  *  This function will center the map, showing all markers attached to this map
  *
  *  @type	function
  *  @date	8/11/2013
  *  @since	4.3.0
  *
  *  @param	map (Google Map object)
  *  @return	n/a
  */

  function center_map(map) {
    // vars
    var bounds = new google.maps.LatLngBounds();

    // loop through all markers and create bounds
    $.each(map.markers, function(i, marker) {
      var latlng = new google.maps.LatLng(
        marker.position.lat(),
        marker.position.lng()
      );

      bounds.extend(latlng);
    });

    // only 1 marker?
    if (map.markers.length == 1) {
      // set center of map
      map.setCenter(bounds.getCenter());
      map.setZoom(14);
    } else {
      // fit to bounds
      map.fitBounds(bounds);
    }
  }

  /*
  *  document ready
  *
  *  This function will render each map when the document is ready (page has loaded)
  *
  *  @type	function
  *  @date	8/11/2013
  *  @since	5.0.0
  *
  *  @param	n/a
  *  @return	n/a
  */

  $(document).ready(function() {
    $('.acf-map').each(function() {
      render_map($(this));
    });
  });
})(jQuery);
