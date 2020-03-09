 /**
 * @author     Nwabueze Miracle <mkleef121@gmail.com>
 * @copyright   Copyright (c) Nwabueze Miracle
 * @license     http://mit-license.org/
 *
 * a google direction and place autocomplete api. neatly crafted for taxi price guess for rideon.ng.
 * This example requires the Places library. Include the libraries=places parameter when you first load the API. For example:
 * <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
 */

 
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

       var map = new google.maps.Map(document.getElementById('map'), {
        mapTypeControl: false,
        center: {lat: 5.0165336, lng: 7.9511593},
        zoom: 13
      });

      //inizialize the map by calling the google.map object 
       // var map = new google.maps.Map(document.getElementById('myMap'), map_options);

        //this responds to click of the button in the prdic area of the map
        $(document).on( "click", "#createmap", function() {
            new AutocompleteDirectionsHandler(map);
        });

        new AutocompleteDirectionsHandler(map);
      }

       /**
        * @constructor object or class that loads all the requirements and is prototyped through out the code 
       */
      function AutocompleteDirectionsHandler(map) {

        $('#dispalymaperror').html('');
        this.map = map;
        this.originPlaceId = null;
        this.destinationPlaceId = null;
        this.travelMode = 'DRIVING';
        this.originstate = null;
        this.destinationstate = null;
        //The markers set in the markers class
        this.markers = [];
        this.marker = null;
        this.rendertest = false;
        var originInput = document.getElementById('origin-input');
        var destinationInput = document.getElementById('destination-input');
        //The DirectionsService and DirectionsRenderer are google objects that handle map rending and display
        this.directionsService = new google.maps.DirectionsService;
        this.directionsDisplay = new google.maps.DirectionsRenderer;

        //The map is set on the DirectionsRenderer object for display of polylines
        this.directionsDisplay.setMap(map);

        //The autocomplete search is biased to nigeria alone
        var options = {
           componentRestrictions: {country: 'ng'},
           
         };

          //The autocomplete object dynamic object representation of the "origin" input
        var originAutocomplete = new google.maps.places.Autocomplete(
            originInput, options);

         //The autocomplete object dynamic object representation of the "destination" input
        var destinationAutocomplete = new google.maps.places.Autocomplete(
            destinationInput, options);

        //Used in case there are lots of travel modes available to user
        // this.setupClickListener('changemode-walking', 'WALKING');
        // this.setupClickListener('changemode-transit', 'TRANSIT');
        // this.setupClickListener('changemode-driving', 'DRIVING');

        //Sets up an event listener impementation of the "origin" places autocomplete feauture of the object
        this.setupPlaceChangedListener(originAutocomplete, 'ORIG');

        //Sets up an event listener impementation of the "destination" places autocomplete feauture of the object
        this.setupPlaceChangedListener(destinationAutocomplete, 'DEST');

      
        //Icons i replaced for the primitive google location marker
        this.icons = {
            start: new google.maps.MarkerImage(
              // URL ("b" means begin for "origin". yellow in color)
              'assets/img/map/b.png',
              // (width,height)
              new google.maps.Size(44, 32),
              // The origin point (x,y)
              new google.maps.Point(-4, -5),
              // The anchor point (x,y)
              new google.maps.Point(22, 32)),
            end: new google.maps.MarkerImage(
              // URL ("e" means end for "Destination". red in color)
              'assets/img/map/e.png',
              // (width,height)
              new google.maps.Size(44, 32),
              // The origin point (x,y)
              new google.maps.Point(-3, -4),
              // The anchor point (x,y)
              new google.maps.Point(22, 32))
          };
      }

      // Sets a listener on a radio button to change the filter type on Places
      // Autocomplete.
      // AutocompleteDirectionsHandler.prototype.setupClickListener = function(id, mode) {
      //   var radioButton = document.getElementById(id);
      //   var me = this;
      //   radioButton.addEventListener('click', function() {
      //     me.travelMode = mode;
      //     me.route();
      //   });
      // };

      AutocompleteDirectionsHandler.prototype.setupPlaceChangedListener = function(autocomplete, mode) {
        var me = this;
        autocomplete.bindTo('bounds', this.map);

        //The google place_changed event listener is tied to the origin and destinaion autocomplete objects
        autocomplete.addListener('place_changed', function() {
          $('#dispalymaperror').html('');
          //the result of the selected place in the dropdown is passed to a place variable
          var place = autocomplete.getPlace();


          //
          //in the list of states that rideon is functioning. It also tell

          /**
            * This side computes the state in the search item, to compare with database to see if is in 
            * the list of states that rideon is functioning. It also tells the google places what representation
            * of states, countries and areas it should bring forth
           */
         var componentForm = {
              locality: 'long_name',
              administrative_area_level_1: 'long_name',
              country: 'long_name'
            };

            
          
          if (!place.place_id) {
            $('#dispalymaperror').html(me.failureMessages('error ::','Please select an option from the dropdown list'));
            //window.alert("Please select an option from the dropdown list.");
            return;
          }

          // Get each component of the address from the place details
        // and Perform more validation for availability of place on rideon
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
             var val = place.address_components[i][componentForm[addressType]];
             //Finds out the country the search is found in
            if (addressType == 'country') {
              var $kai = 'write ajax code to find out if the country is listed';
              console.log(val);
            }

            //Finds out the country the search is found in
            if (addressType == 'administrative_area_level_1') {
             var statehere = val;
              var $kai = 'write ajax code to find out if the State contained in the search is listed in rideons available states';
              console.log(val);
            }
            
          }
        }


          if (mode === 'ORIG') {
            me.originPlaceId = place.place_id;
            me.originstate = statehere;
          
          } else {
            me.destinationPlaceId = place.place_id;
             me.destinationstate = statehere;
          }
          me.route();
        });

      };

      AutocompleteDirectionsHandler.prototype.route = function() {
        if (!this.originPlaceId || !this.destinationPlaceId) {
          return;
        }
        var me = this;

        this.directionsService.route({
          origin: {'placeId': this.originPlaceId},
          destination: {'placeId': this.destinationPlaceId},
          travelMode: this.travelMode,
          unitSystem: google.maps.UnitSystem.METRIC
        }, function(response, status) {
          if (status === 'OK') {
            //var rendertest = false;
            console.log(me.originPlaceId);
            if (this.rendertest) {
              //clear all markers on the map
              me.clearMarkers();
              //this.newrender.setMap(null);
            }
            me.directionsDisplay.setDirections(response);
            me.directionsDisplay.setOptions({suppressMarkers: true});

            this.rendertest = true; //resets the render test 

          //   This logic here suffered me sha. About two days before it worked
          //this.newrender = new google.maps.DirectionsRenderer({
          //   map: me.map,
          //   directions: response,
          //   suppressMarkers: true
          // });


            
          //Gets and sets the new destination and origin markers on the map
          var leg = response.routes[0].legs[0];
          me.makeMarker(leg.start_location, me.icons.start, $('#origin-input').val(), me.map);
          me.makeMarker(leg.end_location, me.icons.end, $('#destination-input').val(), me.map);


          var settings = {
              'cache': false,
              'dataType': "json",
              "async": true,
              "crossDomain": true,
              "url": "google",
              "method": "GET",
              "data":{'link':"https://maps.googleapis.com/maps/api/distancematrix/json?units=metric&origins=place_id:"+me.originPlaceId+"&destinations=place_id:"+me.destinationPlaceId+"&region=ng&units=metric&key=AIzaSyCQLAPdoU7dhdhdyfgsjjs",
                      'destination_state':me.destinationstate,
                      'origin_state':me.originstate,
                      'origin_location':$('#origin-input').val(),
                      'destination_location':$('#destination-input').val()
                      },
              "headers": {
                  "accept": "application/json",
                  "Access-Control-Allow-Origin":"*"
              }
          }

          $.ajax(settings).done(function (response) {
              //console.log(response);
              if (response.status == 'success') {
                $('#dispalymaperror').html(me.successMessages('Succesful Enquiry',response.content));
              }else{
                 $('#dispalymaperror').html(me.failureMessages('error ::',response.content));
              }
              //origins=place_id:ChIJ3S-JXmauEmsRUcIaWtf4MzE
          });
            //me.directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      };


       AutocompleteDirectionsHandler.prototype.makeMarker = function(position, icon, title, map) {
        this.marker = new google.maps.Marker({
          position: position,
          map: map,
          icon: icon,
          title: title,
           animation: google.maps.Animation.DROP
        });

        this.markers.push(this.marker);
      }


      // Sets the map on all markers in the array.
      AutocompleteDirectionsHandler.prototype.setMapOnAll = function(map) {
        for (var i = 0; i < this.markers.length; i++) {
          this.markers[i].setMap(map);
        }
      }

      // Removes the markers from the map, but keeps them in the array.
      AutocompleteDirectionsHandler.prototype.clearMarkers = function() {
        this.setMapOnAll(null);
      }


      // Renders  success message
      AutocompleteDirectionsHandler.prototype.successMessages = function(title, message) {
        var word = '<div class="alert success-icon icon light-bg" role="alert">'+
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                    '<i class="fa fa-lg fa-thumbs-o-up"></i>' +title+' : '+ message +' '+
                    '</div>';
            return word;
      }


      // Renders  failure message
      AutocompleteDirectionsHandler.prototype.failureMessages = function(title, message) {
        var word = '<div class="alert danger-icon icon light-bg" role="alert">'+
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                    '<i class="fa fa-lg fa-times-circle"> </i>' +title+' : '+ message +' '+
                    '</div>';
            return word;
      }


  