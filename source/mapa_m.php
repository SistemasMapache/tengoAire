<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tengo Aire!</title>

	<!-- Latest compiled and minified CSS -->


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style_mob.css">



<style>
/*
 * Style tweaks
 * --------------------------------------------------
 */
body {
  padding-top: 50px;
}

/*
 * Off Canvas
 * --------------------------------------------------
 */
@media screen and (max-width: 767px) {
  .row-offcanvas {
    position: relative;
    -webkit-transition: all .25s ease-out;
         -o-transition: all .25s ease-out;
            transition: all .25s ease-out;
  }

  .row-offcanvas-right {
    right: 0;
  }

  .row-offcanvas-left {
    left: 0;
  }

  .row-offcanvas-right
  .sidebar-offcanvas {
    right: -50%; /* 6 columns */
  }

  .row-offcanvas-left
  .sidebar-offcanvas {
    left: -50%; /* 6 columns */
  }

  .row-offcanvas-right.active {
    right: 50%; /* 6 columns */
  }

  .row-offcanvas-left.active {
    left: 50%; /* 6 columns */
  }

  .sidebar-offcanvas {
    position: absolute;
    top: 0;
    width: 50%; /* 6 columns */
  }
}

.estadistica_button {
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    /*border: 5px solid white;*/
    padding: 5px;
    z-index: 50;
    left: 5px;
    top: 55px; 
    position: absolute;

}
</style>
<link rel="stylesheet" href="libs/leaflet/leaflet.css" />
<script src="libs/leaflet/leaflet.js"></script>
	 
	 
<script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet-src.js"></script>

<script src="libs/leaflet_heat_gh_pages/dist/leaflet-heat.js"></script>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script src="js/jquery.knob.min.js"></script>

<link href="libs/bootstrap-tour-0.10.2/build/css/bootstrap-tour.min.css" rel="stylesheet">
<script src="libs/bootstrap-tour-0.10.2/build/js/bootstrap-tour.min.js"></script>
</head>



<body style="font-family: 'Roboto', sans-serif;">

  
  
  <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
	  
        <div class="navbar-header" style="
    background-color: rgba(24, 116, 144, 0.69);
">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="
    background-color: rgba(24, 116, 144, 0.69);
">
            <span class="sr-only">Navegación</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style="color:white;" >#Tengo<B>Aire</B></a>
        </div>
		
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li ><a href="miConsumo.php">#Tengo<B>Aire</B></a></li>
            <li class="active"><a href="mapa_m.php">Mapa</a></li>
            <li ><a href="contacto_m.php">Quienes Somos</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->


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
<p>Estadísticas de la zona visualizada</p>
</center>
<table class="pure-table" style="width:100%;margin-bottom:-60px;">

    <thead>
        <tr>
            <th><center>% Eficiencia aires</center></th>
            <th><center>Cantidad aires</center></th>
            
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
			
        </tr>

    </tbody>
</table>
			
				
				
                <p style="margin:15px;text-align:justify;font-size:15px;">Informando el consumo de aire acondicionado ayudas a que todos tomemos conciencia y podamos optimizar el consumo energético de aires acondicionados.</p>            
                
            </div>    
        </div>
    </div>
</div>		
	
	

 <div class="estadistica_button">			 
<button title="Para ver las estadísticas de la zona debe acercarse más!" class="btn btn-default btn-lg"  id="getStats"><i class="fa fa-bar-chart fa-lg"></i></button>
</div>

<div id="map"></div>




</body>
	
	
	








<script type="text/javascript">




  
//mapa	
var map = L.map('map', {
attributionControl: true,
center: [-34.61386, -58.43525],//*-34.614700, -58.437632*/],
zoom: 12,
zoomControl:false
	
	
	
});
map.locate({setView: true, maxZoom: 16});

new L.Control.Zoom({ position: 'topright' }).addTo(map);

	

//base
var base = L.tileLayer('http://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);	
	
base.on("load",function() {

console.log("all visible tiles have been loaded");

});

 map.locate({setView : true,maxZoom : 14});
 

 
     map.on('zoomend', function() {
    if(map.getZoom()>=17){
	$('#getStats').attr('disabled', false);
	document.getElementById("getStats").className = "btn btn-info btn-lg";
	}
	else{
	$('#getStats').attr('disabled', true);
	document.getElementById("getStats").className = "btn btn-default btn-lg";
	}
});




 
 
 
$(document).ready(function() {



var tour = new Tour({
   template: '<div class="popover" role="tooltip"> <div class="arrow"></div> <h3 class="popover-title"></h3> <div class="popover-content"></div> <div class="popover-navigation"> <button class="btn btn-sm btn-default" data-role="end">Entendido!</button> </div> </div>',
  steps: [
  {
    element: ".estadistica_button",
    title: "Estadistica",
    content: "Busca tu cuadra y obtené la estadistica de la zona"
  }
]});

// Initialize the tour
tour.init();

// Start the tour
tour.start();




	
 $("#getStats").click(function() {


$('#getStats').attr('disabled', true);


    $.ajax({
        type: "POST",
        url: "store/zonaConsumoBounds.php", //process to mail
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


 
	 
$.getJSON("store/points.php", function(data) {

var fecha=new Date();
fec_dat = fecha.getFullYear() + "-" + (fecha.getMonth() + 1) + "-" + fecha.getDate() + " " + fecha.getHours() + ":" + fecha.getMinutes();
var heat = L.heatLayer(data, {blur:15,radius: 20}).addTo(map);


});	
	 
	 

(function myLoop (i) {          
   setTimeout(function () {   
       $.getJSON("store/points.php?f="+fec_dat, function(data) { L.heatLayer(data, {blur:15,radius: 20}).addTo(map);});	
		   var fecha=new Date();
			fec_dat = fecha.getFullYear() + "-" + (fecha.getMonth() + 1) + "-" + fecha.getDate() + " " + fecha.getHours() + ":" + fecha.getMinutes(); 
      if (--i) myLoop(i);      
   }, 60000)
})(30); 
 
 

 
    //stick in the fixed 100% height behind the navbar but don't wrap it
    $('#slide-nav.navbar-inverse').after($('<div class="inverse" id="navbar-height-col"></div>'));
  
    $('#slide-nav.navbar-default').after($('<div id="navbar-height-col"></div>'));  

    // Enter your ids or classes
    var toggler = '.navbar-toggle';
    var pagewrapper = '#page-content';
    var navigationwrapper = '.navbar-header';
    var menuwidth = '100%'; // the menu inside the slide menu itself
    var slidewidth = '80%';
    var menuneg = '-100%';
    var slideneg = '-80%';


    $("#slide-nav").on("click", toggler, function (e) {

        var selected = $(this).hasClass('slide-active');

        $('#slidemenu').stop().animate({
            left: selected ? menuneg : '0px'
        });

        $('#navbar-height-col').stop().animate({
            left: selected ? slideneg : '0px'
        });

        $(pagewrapper).stop().animate({
            left: selected ? '0px' : slidewidth
        });

        $(navigationwrapper).stop().animate({
            left: selected ? '0px' : slidewidth
        });


        $(this).toggleClass('slide-active', !selected);
        $('#slidemenu').toggleClass('slide-active');


        $('#page-content, .navbar, body, .navbar-header').toggleClass('slide-active');


    });


    var selected = '#slidemenu, #page-content, body, .navbar, .navbar-header';


    $(window).on("resize", function () {

        if ($(window).width() > 767 && $('.navbar-toggle').is(':hidden')) {
            $(selected).removeClass('slide-active');
        }


    });
	

	
	
	
});


 
 </script>
 
 <script>


	$(function($) {
		$(".knob_cant").knob({
		readOnly: true
		});
	});
	

	$(function($) {
		$(".knob_concentracion").knob({
		readOnly: true,
		
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
		
		$(".knob_concentracion").css("font-size","25px");				 
		
		
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


 

</body>
</html>