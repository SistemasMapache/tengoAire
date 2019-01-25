<!DOCTYPE html>
<html>
<head>
	
<title>Tengo Aire!</title>

<meta charset="utf-8" />

<meta name="viewport" content="width=device-width, user-scalable=yes">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<link rel="stylesheet" href="css/style_mob.css">


<script src="http://maps.google.com/maps/api/js?libraries=places&region=ar&language=es&sensor=true"></script>




</head>


<body>

<style>

#map_canvas {         
    height: 200px;         
    width: 100%;         
    margin: 0.6em;       
}
</style>

<script>

 $(function(){     
 

   // Try HTML5 geolocation.
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };

    
      map.setCenter(pos);
    }, function() {
      handleLocationError(true, infoWindow, map.getCenter());
    });
  } else {
    // Browser doesn't support Geolocation
   // handleLocationError(false, infoWindow, map.getCenter());
  }


function handleLocationError(browserHasGeolocation, infoWindow, pos) {
 
}
 
    var lat = -33.8688,
        lng = 151.2195,
        latlng = new google.maps.LatLng(lat, lng),
        image = 'http://www.google.com/intl/en_us/mapfiles/ms/micons/blue-dot.png'; 
		
		
         
    var mapOptions = {           
            center: new google.maps.LatLng(lat, lng),           
            zoom: 16,           
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
        types: ["geocode"]
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
        infowindow.setContent(placeName);
        infowindow.open(map, marker);
     }
});
   
    mapdiv = document.getElementById("map");
   mapdiv.style.width =window.innerWidth || document.body.clientWidth;
    mapdiv.style.height = window.innerHeight || document.body.clientHeight;     
	  

 

		 
		
		 
</script>



<style>
.energy-class {
  position: relative;
  width: 155px;
  font-family : sans-serif;
}
.energy-class span {
  display: block;
  position: absolute;
  left: 110%;
  background: #000;
  width: 30px;
  height: 30px;
}
.energy-class span.a {
  top: 0px;
}
.energy-class span.b {
  top: 20px;
}
.energy-class span.c {
  top: 40px;
}
.energy-class span.d {
  top: 60px;
}
.energy-class span.e {
  top: 80px;
}
.energy-class span.f {
  top: 100px;
}
.energy-class span.g {
  top: 120px;
}
.energy-class span:before {
  content: '';
  position: absolute;
  top: 0;
  right: 100%;
  width: 0;
  height: 0;
  border-top: 15px solid transparent;
  border-right: 15px solid #000;
  border-bottom: 15px solid transparent;
}
.energy-class span:after {
  position: absolute;
  top: 0;
  left: 0;
  width: 30px;
  line-height: 30px;
  text-align: center;
  color: #fff;
  font-size: 30px;
  text-transform: uppercase;
}
.energy-class span.a:after {
  content: ' a ';
}
.energy-class span.b:after {
  content: ' b ';
}
.energy-class span.c:after {
  content: ' c ';
}
.energy-class span.d:after {
  content: ' d ';
}
.energy-class span.e:after {
  content: ' e ';
}
.energy-class span.f:after {
  content: ' f ';
}
.energy-class span.g:after {
  content: ' g ';
}
.energy-class div {
  position: relative;
  height: 20px;
  margin: 2px 0;
}
.energy-class div:before {
  content: '';
  position: absolute;
  top: 0;
  left: 100%;
  background: transparent;
  width: 0;
  height: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
}
.energy-class div:after {
  position: absolute;
  top: 0;
  right: 0.25em;
  height: 20px;
  line-height: 20px;
  color: #fff;
  text-shadow: 0 0 2px #000;
  text-transform: uppercase;
}
.energy-class div.a {
  background: #3b7634;
  width: 50px;
}
.energy-class div.a:before {
  border-left: 8px solid #3b7634;
}
.energy-class div.a:after {
  content: ' a ';
}
.energy-class div.b {
  background: #5da436;
  width: 65px;
}
.energy-class div.b:before {
  border-left: 8px solid #5da436;
}
.energy-class div.b:after {
  content: ' b ';
}
.energy-class div.c {
  background: #a3cf2a;
  width: 80px;
}
.energy-class div.c:before {
  border-left: 8px solid #a3cf2a;
}
.energy-class div.c:after {
  content: ' c ';
}
.energy-class div.d {
  background: #f6df1b;
  width: 95px;
}
.energy-class div.d:before {
  border-left: 8px solid #f6df1b;
}
.energy-class div.d:after {
  content: ' d ';
}
.energy-class div.e {
  background: #f29020;
  width: 110px;
}
.energy-class div.e:before {
  border-left: 8px solid #f29020;
}
.energy-class div.e:after {
  content: ' e ';
}
.energy-class div.f {
  background: #eb422c;
  width: 125px;
}
.energy-class div.f:before {
  border-left: 8px solid #eb422c;
}
.energy-class div.f:after {
  content: ' f ';
}
.energy-class div.g {
  background: #ea2039;
  width: 140px;
}
.energy-class div.g:before {
  border-left: 8px solid #ea2039;
}
.energy-class div.g:after {
  content: ' g ';
}
</style>



<div class="navbar-header">


  
  <div class="explanation">
  
<form id="form_data">
  
<table border="0">

<tr>
<td valign="top"> 

<h4>Ubicación Automatica</h4>

<div id="map_canvas"></div>

<input id="searchTextField" type="text" size="100%" style="color:black;" placeholder="Ingresar dirección"  /> 




<h4>¿Cuantos equipos de aire acondicionado?</h4>		
<select class="form-control" style="height:42px" id="cant_aire">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
</select>
<h4>¿Que categoria?</h4>		



<div class="funkyradio">



	<div class="funkyradio-info">
		<input type="radio" name="radio" id="radio1" checked/>
		<label for="radio1">
			<div class="energy-class" style="margin-left: 45px;"><div class="a"></div></div>
		</label>
	</div>
		
		
	<div class="funkyradio-info">
		<input type="radio" name="radio" id="radio2" />
		<label for="radio2">
			<div class="energy-class" style="margin-left: 45px;"><div class="b"></div></div>
		</label>
	</div>		
		

	<div class="funkyradio-info">
		<input type="radio" name="radio" id="radio3" />
		<label for="radio3">
			<div class="energy-class" style="margin-left: 45px;"><div class="c"></div></div>
		</label>
	</div>	



	<div class="funkyradio-info">
		<input type="radio" name="radio" id="radio4" />
		<label for="radio4">
			<div class="energy-class" style="margin-left: 45px;"><div class="d"></div></div>
		</label>
	</div>	



	<div class="funkyradio-info">
		<input type="radio" name="radio" id="radio5" />
		<label for="radio5">
			<div class="energy-class" style="margin-left: 45px;"><div class="e"></div></div>
		</label>
	</div>	


	<div class="funkyradio-info">
		<input type="radio" name="radio" id="radio6" />
		<label for="radio6">
			<div class="energy-class" style="margin-left: 45px;"><div class="f"></div></div>
		</label>
	</div>		

	<div class="funkyradio-info">
		<input type="radio" name="radio" id="radio7" />
		<label for="radio7">
			<div class="energy-class" style="margin-left: 45px;"><div class="g"></div></div>
		</label>
	</div>	

		 

    </div>

<!-- class="btn btn-success" style="background:rgba(43, 62, 80,0.5);text-decoration: none;" -->

<div align="center" style="width:100%;"><a id="send-consumo" class="btn btn-primary btn-lg outline"  >Tengo Aire!</a></div>

</td>

</tr>

</table>	


</form>
			
</div>


</div>


</body>