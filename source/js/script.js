$(function(){     
 

  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };

    
      map.setCenter(pos);
	   marker.setPosition(pos);
	   latlng = new google.maps.LatLng(pos);
	   document.getElementById("latlng").value=latlng;

    }, function() {
      handleLocationError(true, infoWindow, map.getCenter());
    });
  } else {
  alert('Active la ubicacion en su dispositivo');
  }

 
    var lat = -34.61386,
        lng = -58.43525,
        latlng = new google.maps.LatLng(lat, lng),
        image = 'http://www.google.com/intl/en_us/mapfiles/ms/micons/blue-dot.png'; 
		
		
         
    var mapOptions = {           
            center: new google.maps.LatLng(lat, lng),           
            zoom: 16,           
				streetViewControl: false,
			zoomControl: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP         
        },
        map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions),
        marker = new google.maps.Marker({
            position: latlng,
            map: map,
            icon: image
         });
     
    var input = document.getElementById('searchTextField');         
    var autocomplete = new google.maps.places.Autocomplete(input, {
        types: ["geocode"],
		componentRestrictions: {country: "ar"}
    });          
    
    autocomplete.bindTo('bounds', map); 
    var infowindow = new google.maps.InfoWindow(); 
 
    google.maps.event.addListener(autocomplete, 'place_changed', function() {
        infowindow.close();
        var place = autocomplete.getPlace();
        if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
        } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  
        }
        
        moveMarker(place.name, place.geometry.location);
    });  
    
    $("input").focusin(function () {
        $(document).keypress(function (e) {
            if (e.which == 13) {
                infowindow.close();
                var firstResult = $(".pac-container .pac-item:first").text();
                
                var geocoder = new google.maps.Geocoder();
                geocoder.geocode({"address":firstResult }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var lat = results[0].geometry.location.lat(),
                            lng = results[0].geometry.location.lng(),
                            placeName = results[0].address_components[0].long_name,
                            latlng = new google.maps.LatLng(lat, lng);
                        
                        moveMarker(placeName, latlng);
                        $("input").val(firstResult);
                    }
                });
            }
        });
    });
     
     function moveMarker(placeName, latlng){
        marker.setIcon(image);
        marker.setPosition(latlng);
		document.getElementById("latlng").value=latlng;
        infowindow.setContent(placeName);
        infowindow.open(map, marker);
     }
});
   
   mapdiv = document.getElementById("map_canvas");
  mapdiv.style.width =window.innerWidth || document.body.clientWidth;
  
  $('#header')[0].scrollIntoView();
 

 

		 