<!-- <!DOCTYPE html>
<html>
<head>
	<title>test map </title>
</head>
<body>



<div class="container mb-20" >
	<div class="col-sm-12 col-md-6 " style="    display: table-cell;
    vertical-align: middle;
">
		<div id="myMap" >
			
		</div>
	</div>

	<div class="col-sm-12 col-md-6 ">
		<div class="col-md-12">
			<input type="text" name="from" id="origin-input">
		</div>
		<br>
		<br>

		<div class="col-md-12">
			<input type="text" name="to" id="destination-input">
		</div>
	</div>
</div>

<div id="dispalymaperror">
	
</div>
		


</body>

    <script src="{{asset('assets/frontend/vendor/jquery/jquery.min.js')}}"></script> -->

  <!-- Loads up the google google map with places library -->
<!--   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfCjsgA6B-3chmgDvdRGiy1ZOsTg4900s&libraries=places&callback=initMap"
        async defer></script>

    <script src="{{asset('assets/frontend/js/google_map.js')}}"></script>
</html> -->


<!DOCTYPE html>
<html>
  <head>
    <style>
       /* Set the size of the div element that contains the map */
      #myMap {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
  </head>
  <body>
    <h3>My Google Maps Demo</h3>
    <!--The div element for the map -->
    <div id="myMap"></div>
    <script>
// Initialize and add the map
//The initMap function is always called immediately the google api has been loaded
      function initMap() { 

        /**
        * set your google maps parameters.  Visit http://www.latlong.net/convert-address-to-lat-long.html for generate your Lat. Long.
        * This one is currently the enugu longitude and latitude
        */
        
                var $latitude = 6.458366, 
                    $longitude = 7.546389,
                    $map_zoom = 15 /* ZOOM SETTING */

        //we define here the style of the map
                var style = [{

                    "stylers": [{
                        "hue": "#03a9f4"
                    }, {
                        "saturation": 10
                    }, {
                        "gamma": 2.15
                    }, {
                        "lightness": 12
                    }]
                    
                }];

                //set google map options
                var map_options = {
                    center: new google.maps.LatLng($latitude, $longitude),
                    zoom: $map_zoom,
                    panControl: true,
                    zoomControl: true,
                    mapTypeControl: true,
                    streetViewControl: true,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scrollwheel: true,
                    styles: style
                }

       

      //inizialize the map by calling the google.map object 
        var map = new google.maps.Map(document.getElementById('myMap'), map_options);

        // console.log(map,"Map has been called")
        //this responds to click of the button in the prdic area of the map
        // $(document).on( "click", "#createmap", function() {
        //     new AutocompleteDirectionsHandler(map);
        // });

        // new AutocompleteDirectionsHandler(map);
      }
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfCjsgA6B-3chmgDvdRGiy1ZOsTg4900s&callback=initMap">
    </script>
  </body>
</html>