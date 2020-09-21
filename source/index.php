<?php require_once 'libs/Mobile-Detect-2.8.19/Mobile_Detect.php';

$detect = new Mobile_Detect;


if( $detect->isMobile() && !$detect->isTablet() ){

header("Location: miConsumo.php");
die();

}

?>
<!DOCTYPE html>
<html lang="es">
<head>

<title>#TengoAire!</title>

	<meta charset="utf-8" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />

<!-- Leaflet -->
<link rel="stylesheet" href="libs/leaflet/leaflet.css" />
<script src="libs/leaflet/leaflet.js"></script>



<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.css">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/jquery.knob.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet-src.js"></script>

<script src="libs/leaflet_heat_gh_pages/dist/leaflet-heat.js"></script>


<link rel="stylesheet" href="css/style.css">

<!-- Latest compiled and minified JavaScript -->
<script src="libs/leaflet-context.js" ></script>
<link rel="stylesheet" href="libs/leaflet-context.css">

<link href="libs/bootstrap-tour-0.10.2/build/css/bootstrap-tour.min.css" rel="stylesheet">
<script src="libs/bootstrap-tour-0.10.2/build/js/bootstrap-tour.min.js"></script>

<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>


<style>

        body {
            padding: 0;
            margin: 0;
			font-family: 'Roboto', sans-serif;

        }
body p {

font-size:14px;
}

        html, body, #map {
            height: 100%;
			width:100%;


        }


.sidebar_carga {
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    /*border: 5px solid white;*/
    background-color: rgba(24, 116, 144, 0.69);
    padding: 15px;
    color: white;
    z-index: 50;
    left: 5px;
    top: 10px;
    position: absolute;
    font-size: 12px;
    width: 230px;

}
.sidebar_carga h4 {
font-size:16px;
}

.sidebar_carga h4 a {

color:rgb(209, 247, 255);


}


.twitter_button {
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    /*border: 5px solid white;*/
    padding: 5px;
    z-index: 50;
    right: 50px;
    top: 5px;
    position: absolute;

}

.estadistica_button {
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    /*border: 5px solid white;*/
    padding: 5px;
    z-index: 50;
    right: 48%;
    top: 5px;
    position: absolute;

}


.basemap_button {
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    /*border: 5px solid white;*/
    padding: 5px;
    z-index: 50;
    right: 48%;
    bottom: 5px;
    position: absolute;

}





</style>



<link rel="stylesheet" href="css/pure.css">
</head>



<body>

<div class="twitter_button">

<a href="https://twitter.com/intent/tweet?button_hashtag=tengoaire&text=mi%20aire%20en%2024%C2%BA%20" class="twitter-hashtag-button" data-size="large" data-url="http://tinyurl.com/jcukzb7" data-dnt="true">Tweet #tengoaire</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

</div>




<div class="estadistica_button">
<button title="Para ver las estadísticas de la zona debe acercarse más!" class="btn btn-default btn-lg"  id="getStats"><i class="fa fa-bar-chart fa-lg"></i></button>
</div>


<!-- question mark -->
<div id="basemap_button" class="basemap_button" style="position:fixed;bottom:1em;center:1em;" class="span4 proj-div">

<button title="Para cambiar el color del mapa!" class="btn btn-default btn-lg"  id="getStats"><i class="fa fa-arrows-h fa-lg"></i></button>
</div>




<div id="map"></div>
<div id="geocoder"></div>


<div class="sidebar_carga" >
<h2 style="margin-top:-5px;">#Tengo<B>Aire</B>!</h2>
<p>Mapa de aires acondicionados.</p>
<form class="form-inline" id="declara">
                    <div class="form-group">
<h4><i class="fa fa-question-circle"></i> ¿Cuantos aires tenés?</h4>

<select class="form-control form-control-inline" style="padding-right: 32px;" id="cant_aire" name="cant_aire">
<option value="1">tengo 1 aire</option>
<option value="2">tengo 2 aires</option>
<option value="3">tengo 3 aires</option>
<option value="4">tengo 4 aires</option>
<option value="5">tengo 5 aires</option>
<option value="6">tengo más de 5 aires</option>

</select>
                    </div>
                    <!-- Single button -->
<div class="form-group">

                     <h4><i class="fa fa-question-circle"></i> ¿Son <a href="http://www.fvsa.org.ar/ecoeficiencia/aires_etiquetas.php" target="_blank">eficientes</a>?</h4>

	<div class="funkyradio">

		<div class="funkyradio-info">
			<input type="radio" name="categoria" id="radio1" value="1" checked/>
			<label for="radio1">
				<div class="energy-class" style="margin-left: 45px;"><div class="a"></div></div>
			</label>
		</div>

		<div class="funkyradio-info">
			<input type="radio" name="categoria" id="radio5" value="2" />
			<label for="radio5">
				<div class="energy-class" style="margin-left: 45px;"><div class="e"></div></div>
			</label>
		</div>

		<div class="funkyradio-info">
			<input type="radio" name="categoria" id="radio7" value="3"/>
			<label for="radio7">
				<div class="energy-class" style="margin-left: 45px;"><div class="g"></div></div>
			</label>
		</div>

    </div>

</div>



<div class="form-group">

<h4><i class="fa fa-question-circle"></i> ¿Domicilio de los aires?</h4>
<input id="searchTextField" type="text" size="21"  required="true"  class="form-control input-lg" style="height:35px;color:black;font-size:14px;"/>
<input type="hidden" id="latlng" name="latlng" />

</div>





<div class="form-group">

<br><button class="btn btn-primary btn-lg outline" type="submit" id="submit">Tengo Aire!</button>

</div>

</form>
</div>


<!--gracias -->
<div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog" aria-labelledby="thankyouLabel" aria-hidden="true"  style="background-color:rgba(24, 116, 144, 0.50);">
    <div class="modal-dialog">

        <div class="modal-content">


            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

				<h2 class="modal-title" id="myModalLabel">
				<center><i class="fa fa-thumbs-o-up fa-lg"></i> Gracias!</center>

				</h2>
            </div>


            <div class="modal-body" style="padding:0px !important;">

<center>
<p>Estadísticas de la zona</p>
</center>
<table class="pure-table" style="width:100%;margin-bottom:-60px;">

    <thead>
        <tr>
            <th><center>% Eficiencia aires</center></th>
            <th><center>Cantidad aires</center></th>
            <th><center>Concentración de aires</center></th>
        </tr>
    </thead>


    <tbody>
        <tr>
            <td>
			<input id="graf_porc" class="knob_porc" data-angleOffset=-125 data-width="150" data-angleArc=250 >
			</td>
			<td>
			<input id="graf_cant" class="knob_cant" data-max="500" data-angleOffset=-125 data-width="150" data-angleArc=250>
			</td>
			<td >
			<input id="graf_concentracion" class="knob_concentracion" data-angleOffset=-125 data-width="150" data-angleArc=250 >
			</td>
        </tr>

    </tbody>
</table>



                <p style="margin:15px;text-align:justify;font-size:15px;">Informando el consumo de aire acondicionado ayudas a que todos tomemos conciencia y podamos optimizar el consumo energético de aires acondicionados.</p>

            </div>
        </div>
    </div>
</div>



<!-- quienes somos -->
<div id="GSCCModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="background-color:rgba(24, 116, 144, 0.50);">
 <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;  </button>
        <h3 class="modal-title" id="myModalLabel">Quienes somos?</h3>
      </div>
      <div class="modal-body">


<p> Somos <B>Mapache</B>, un equipo de trabajo con experiencia en brindar servicios integrales e innovadores que generen valor agregado. </p>
<p>Trabajamos con <i class="fa fa-heart" style="color:red;"></i> usando tecnologías de código abierto, obteniendo productos finales a menores costos. </p>


<p>
<i class="fa fa-sitemap" style="margin-right:10px;"></i> <B>Desarrollos de sistemas web</B><br>
Administración de proyectos / Workflow / Project / Turnos / Reporting & charts <br></p>

<p>
<i class="fa fa-file-pdf-o" style="margin-right:10px;"></i> <B>Digitalización de documentos y gestión documental</B><br>
Automatización / OCR / Rapido acceso a información<br></p>

<p>
<i class="fa fa-map-marker" style="margin-right:10px;"></i> <B>Sistemas de información geográfica</B><br>
Visores web & mobile / Georeferenciación / Spatial analytics / Geocoding, marketing / Admin & tuning GeoDB / Raster process<br></p>



<p>
<i class="fa fa-link" style="margin-right:10px;"></i> <a href="https://www.linkedin.com/company/sistemas-mapache" target="_blank">Linkedin</a></p>

<p>
<i class="fa fa-link" style="margin-right:10px;"></i> <a href="http://smapache.com.ar/" target="_blank">Web</a>
</p>

<p>
<i class="fa fa-envelope-o" style="margin-right:10px;"></i>Dudas o ganas de armar un desarrollo? <B>info@smapache.com.ar</B> o contactanos en <a href="https://twitter.com/infomapache" target="_blank"><B>@infomapache</B></a>
</p>


<br>
<img src="http://www.smapache.com.ar/images/smapache_logoinf.png" width="100px;" style="
    position: absolute;
    margin-top: -10px;
    margin-left: -5px;
"></img>
<p style="
    margin-left: 100px;
">
<i class="fa fa-twitter" style="margin-right:10px;"></i> <a href="http://www.twitter.com/vlasvlasvlas" target="_blank">@vlasvlasvlas</a>
</p>

<p style="
    margin-left: 100px;
">
<i class="fa fa-twitter" style="margin-right:10px;"></i>  <a href="http://www.twitter.com/damcasti" target="_blank">@damcasti</a>
</p>

<p style="
    margin-left: 100px;
">
<i class="fa fa-user" style="margin-right:10px;"></i>  <a href="https://www.linkedin.com/in/leandro-stryjek-82bab810" target="_blank">Leandro Stryjek</a>
</p>


      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>






<!-- question mark -->
<div id="Mapache" style="position:fixed;bottom:1em;right:1em;" class="span4 proj-div" data-toggle="modal" data-target="#GSCCModal">

<h4 style="background:rgba(242, 242, 242,0.5);">
<a href="#mapachemodal"><i class="fa fa-question-circle"></i></a>
</h4>
</div>

</body>




<!-- js -->
<script src="http://maps.google.com/maps/api/js?libraries=places&region=ar&language=es&sensor=true"></script>




<script>

var tour = new Tour({
   template: '<div class="popover" role="tooltip"> <div class="arrow"></div> <h3 class="popover-title"></h3> <div class="popover-content"></div> <div class="popover-navigation"> <div class="btn-group"> <button class="btn btn-sm btn-default" data-role="prev">&laquo; Previo</button> <button class="btn btn-sm btn-default" data-role="next">Siguiente &raquo;</button> <button class="btn btn-sm btn-default" data-role="pause-resume" data-pause-text="Pause" data-resume-text="Resume">Pause</button> </div> <button class="btn btn-sm btn-default" data-role="end">Finalizar tour</button> </div> </div>',
  steps: [
  {
    element: ".sidebar_carga",
    title: "Mis Aires",
    content: "Acá podes informar los aires que tenés en tu casa/oficina/etc..."
  },
  {
    element: ".estadistica_button",
    title: "Estadistica",
    content: "Buscá tu cuadra y obtené la estadistica de la zona"
  },
   {
    element: ".twitter_button",
    title: "Twitter",
    content: "Ayudanos a difundir la app :)"
  }
]});

// Initialize the tour
tour.init();

// Start the tour
tour.start();

function showCoordinates (e) {
	     // alert(e.latlng);

		  if (typeof marker != "undefined"){
		map.removeLayer(marker);
		document.getElementById("searchTextField").value='';
		}
		marker=L.marker([e.latlng.lat,e.latlng.lng],{draggable:true}).bindPopup("Ubicacion de aire acondicionado&nbsp;&nbsp;&nbsp; &nbsp;<br>Puedes Moverme! &nbsp;&nbsp; &nbsp;  ").addTo(map);
		marker.openPopup();

		document.getElementById("searchTextField").value=parseFloat(e.latlng.lat).toFixed(5) +'; '+parseFloat(e.latlng.lng).toFixed(5);
		document.getElementById("latlng").value=parseFloat(e.latlng.lat).toFixed(5) +','+parseFloat(e.latlng.lng).toFixed(5);

		marker.on('move', function(e) {document.getElementById("searchTextField").value=parseFloat(e.latlng.lat).toFixed(5) +'; '+parseFloat(e.latlng.lng).toFixed(5);});
		marker.on('move', function(e) {document.getElementById("latlng").value=parseFloat(e.latlng.lat).toFixed(5) +','+parseFloat(e.latlng.lng).toFixed(5);});

      }


//mapa
var map = L.map('map', {
attributionControl: true,
center: [-34.61386, -58.43525],//*-34.614700, -58.437632*/],
zoom: 12,
zoomControl:false,
    contextmenu: true,
    contextmenuWidth: 115,
    contextmenuItems: [{
        text: 'Agregar aire acá',
        callback: showCoordinates
    }


	]

});

new L.Control.Zoom({ position: 'topright' }).addTo(map);



//base
var base_light = L.tileLayer('http://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors.'
});


var base_dark = L.tileLayer('http://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors.'
}).addTo(map);



base_light.on("load",function() {

//console.log("all visible tiles have been loaded");


});

 map.locate({setView : true,maxZoom : 14});



 /////////////// geoip

 L.GeoIP = L.extend({
    getPosition: function (ip, callback) {
        var url = "http://freegeoip.net/json/";
        var result = L.latLng(0, 0);

        if (ip !== undefined) {
            url = url + ip;
        } else {

        }

        var xhr = new XMLHttpRequest();
        xhr.open("GET", url);
        xhr.timeout = 2000;
        xhr.onload = function () {
            var status = xhr.status;
            if (status == 200) {
                var geoip_response = JSON.parse(xhr.responseText);
                result.lat = geoip_response.latitude;
                result.lng = geoip_response.longitude;

                callback(result)
            } else {
                console.log("Leaflet.GeoIP.getPosition failed because its XMLHttpRequest got this response: " + xhr.status);
            }
        };
        xhr.send();
    },

    centerMapOnPosition: function (map, zoom, ip) {
        L.GeoIP.getPosition(ip, function(position) {
            map.setView(position, zoom);
        });
    }
});



//geoip
L.GeoIP.centerMapOnPosition(map, 10);


//switch
function isOdd(num) { return num % 2;}
var basesw = 0;
$('#basemap_button button').click(function() {
if (isOdd(basesw)) {
map.removeLayer(base_light,true);map.addLayer(base_dark,true);
} else {
map.removeLayer(base_dark,true);map.addLayer(base_light,true);
}
basesw = basesw+1;
});




var input = document.getElementById('searchTextField');
var autocomplete = new google.maps.places.Autocomplete(input, {
        types: ["geocode"],
		componentRestrictions: {country: "ar"}
    });

    var infowindow = new google.maps.InfoWindow();

    google.maps.event.addListener(autocomplete, 'place_changed', function() {
        infowindow.close();
        var place = autocomplete.getPlace();
        if (place.geometry.viewport) {
           map.setMaxBounds(place.geometry.viewport);
        } else {
		  var lat = place.geometry.location.lat(),
                 lng = place.geometry.location.lng();
				map.panTo(L.latLng(lat,lng));
				map.setZoom(17);
				  latlng = new google.maps.LatLng(lat, lng);
				  document.getElementById("latlng").value=latlng;
				marker=new L.marker(L.latLng(lat,lng),{draggable: true});

marker.on('dragend', function(event){
            var marker = event.target;
            var position = marker.getLatLng();
          document.getElementById("latlng").value=position;
    });

 map.addLayer(marker);

        }



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







$(document).ready(function () {




$.getJSON("store/points.php", function(data) {

var fecha=new Date();
fec_dat = fecha.getFullYear() + "-" + (fecha.getMonth() + 1) + "-" + fecha.getDate() + " " + fecha.getHours() + ":" + ("0" + fecha.getMinutes()).substr(-2);

heat = L.heatLayer(data, {blur:15,radius: 20}).addTo(map);

});





$('form').submit(function(e){
e.preventDefault();
document.getElementById("submit").innerHTML ="Agregando...";
$('#submit').attr('disabled', true);

    $.ajax({
        type: "POST",
        url: "store/addConsumo.php", //process to mail
        data: $('form').serialize(),
        success: function(msg){
          document.getElementById("submit").innerHTML ="TENGO AIRE!";
		  $('#submit').attr('disabled', false);
		   $(document).ready(function(){


		   var xy=document.getElementById("latlng").value.split(",");
		   estadistica_zona(xy[0],xy[1]);



			<?php
			$newTime = strtotime('-2 minutes');
			$fecha_2 = date('Y-m-d H:i', $newTime);
			?>

		   $.getJSON("store/points.php?f=<?php echo $fecha_2; ?>", function(data) { L.heatLayer(data, {radius: 25}).addTo(map);});

		var fecha=new Date();



       });
	   document.getElementById("searchTextField").value='';

        },
        error: function(){
            alert("Hubo un problema. Por favor avise a @tengoaire. Gracias.");
			document.getElementById("searchTextField").value='';
        }
    });
});
});



 function estadistica_zona(coord_x,coord_y){

 $.ajax({
        type: "POST",
        url: "store/zonaConsumo.php", //process to mail
        data:{x: coord_x,y:coord_y},
        success: function(data){

		var aires_tot=0;
		var eficientes=0;

for(i=0;i<data.length;i++){  aires_tot+=Number(data[i]['cantidad']); if(Number(data[i]['categoria'])==1){ eficientes+=Number(data[i]['cantidad']); }	}

var color_cant = '#ee6666';
if (aires_tot <= 42 ) { color_cant = '#66EE66';}
if (aires_tot > 42 && aires_tot <= 84) { color_cant = '#eeee66';}


eficientes=Math.round((eficientes*100)/aires_tot);
color_porc = '#66EE66';
if (eficientes <= 33 ) { color_porc = '#ee6666';}
if (eficientes > 33 && eficientes <= 66) { color_porc = '#eeee66';}


color_concentracion = '#ee6666';
if (aires_tot <= 42 ) { color_concentracion = '#66EE66';}
if (aires_tot > 42 && aires_tot <= 84) { color_concentracion = '#eeee66';}


$('.knob_cant').trigger(
        'configure',
        {
            "fgColor":color_cant
        }
    );

  $('.knob_cant')
        .val(aires_tot)
        .trigger('change');



$('.knob_porc').trigger(
        'configure',
        {
            "fgColor":color_porc
        }
    );

$('.knob_porc')
        .val(eficientes)
        .trigger('change');




$('.knob_concentracion').trigger(
        'configure',
        {
            "fgColor":color_concentracion
        }
    );

$('.knob_concentracion')
        .val(aires_tot)
        .trigger('change');


   map.removeLayer(marker);
$('#thankyouModal').modal('show');

   },

   error: function(){
            alert("Hubo un problema. Por favor avise a @tengoaire. Gracias.");
        }
    });

 }


 map.on('zoomend', function() {
    if(map.getZoom()>=13){
	$('#getStats').attr('disabled', false);
	document.getElementById("getStats").className = "btn btn-info btn-lg";
	}
	else{
	$('#getStats').attr('disabled', true);
	document.getElementById("getStats").className = "btn btn-default btn-lg";
	}
});


 $("#getStats").click(function() {


$('#getStats').attr('disabled', true);

    $.ajax({
        type: "POST",
        url: "store/zonaConsumoBounds.php", 
       data:{xsw: map.getBounds()._southWest.lat,ysw:map.getBounds()._southWest.lng,xne:map.getBounds()._northEast.lat,yne:map.getBounds()._northEast.lng},
            success: function(data){

		var aires_tot=0;
		var eficientes=0;

for(i=0;i<data.length;i++){  aires_tot+=Number(data[i]['cantidad']); if(Number(data[i]['categoria'])==1){ eficientes+=Number(data[i]['cantidad']); }	}

var color_cant = '#ee6666';
if (aires_tot <= 42 ) { color_cant = '#66EE66';}
if (aires_tot > 42 && aires_tot <= 84) { color_cant = '#eeee66';}


eficientes=Math.round((eficientes*100)/aires_tot);
color_porc = '#66EE66';
if (eficientes <= 33 ) { color_porc = '#ee6666';}
if (eficientes > 33 && eficientes <= 66) { color_porc = '#eeee66';}


color_concentracion = '#ee6666';
if (aires_tot <= 42 ) { color_concentracion = '#66EE66';}
if (aires_tot > 42 && aires_tot <= 84) { color_concentracion = '#eeee66';}



$('.knob_cant').trigger(
        'configure',
        {
            "fgColor":color_cant
        }
    );

  $('.knob_cant')
        .val(aires_tot)
        .trigger('change');



$('.knob_porc').trigger(
        'configure',
        {
            "fgColor":color_porc
        }
    );

$('.knob_porc')
        .val(eficientes)
        .trigger('change');




$('.knob_concentracion').trigger(
        'configure',
        {
            "fgColor":color_concentracion
        }
    );

$('.knob_concentracion')
        .val(aires_tot)
        .trigger('change');


$('#thankyouModal').modal('show');

   },
        error: function(){
            alert("Hubo un problema. Por favor avise a @tengoaire. Gracias.");
        }
    });


$('#getStats').attr('disabled', false);

});







</script>


<!-- knob -->
<script>


	$(function($) {
		$(".knob_cant").knob({
		readOnly: true
		});
	});


	$(function($) {
		$(".knob_concentracion").knob({
		readOnly: true,
		'draw': function() {
        $(this.i).css('font-size', '25px');
      },
		'format' : function (value) {

		if (value <43) {
			 return 'Bajo';



		}
		if (value >42 && value <95) {

			 return 'Medio';

		}
		if (value >94) {
			 return 'Alto';
		}
		}

		});




	});


	$(function($) {
		$(".knob_porc").knob({
		readOnly: true,
		'format' : function (value) {


			 return value+'%';

		}

		});
	});

</script>

<script>
<!-- google analytics script -->
</script>


</body>
