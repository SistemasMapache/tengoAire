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
  padding-top: 70px;
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
</style>

<?php

 $latlng = $_GET["latlng"];
$latlng=str_replace("LatLng", "",$latlng);
$latlng=str_replace("(", "",$latlng);
$latlng=str_replace(")", "",$latlng);
$latlng=str_replace(" ", "",$latlng);


$cord = explode(",", $latlng);?>


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
            <li class="active"><a href="miConsumo.php">#Tengo<B>Aire</B></a></li>
            <li><a href="mapa_m.php">Mapa</a></li>
            <li><a href="contacto_m.php">Quienes Somos</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->



	
	
<!--wrap the page content do not style this-->
<div id="page-content">

 
<div class="panel panel-info">




<div class="panel-heading">
	<h2 class="modal-title" id="myModalLabel"> 
					<center><i class="fa fa-thumbs-o-up fa-lg"></i> Gracias!</center>
					
					</h2>
					
	  <center>
	<h4>Estadísticas de tu zona (radio 200mts)</h4>
	</center>
</div>





<div class="panel-body">

<p style="text-align:justify;font-size:15px;">Informando el consumo de aire acondicionado ayudas a que todos tomemos conciencia y podamos optimizar el consumo energético de aires acondicionados.</p>

<center>

<img src="http://api.tiles.mapbox.com/v4/mapbox.streets/pin-m+f44(<?php echo $cord[1];?>,<?php echo $cord[0];?>,16)/<?php echo $cord[1];?>,<?php echo $cord[0];?>,16/290x170.png?access_token=pk.eyJ1IjoiamFtZXMtbGFuZS1jb25rbGluZyIsImEiOiJ3RHBOc1BZIn0.edCFqVis7qgHPRgdq0WYsA"></img>

</center>

<div class="page-header">
<center>
<h4>% Eficiencia aires</h4>
<center>
</div>
<center style="margin-bottom:-50px;margin-top: -25px;">
<input id="graf_porc" class="knob_porc" data-angleOffset=-125 data-width="150" data-angleArc=250 >
</center>

<div class="page-header">
<center><h4>Cantidad de aires</h4></center>
</div>

<center style="margin-bottom:-70px;margin-top: -25px;">
<input id="graf_cant" class="knob_cant" data-max="500" data-angleOffset=-125 data-width="150" data-angleArc=250>
</center>

<div class="page-header">
<center><h4>Concentración de aires</h4></center>
</div>

<center style="margin-bottom:-90px;margin-top: -25px;">
<input id="graf_concentracion" class="knob_concentracion" data-angleOffset=-125 data-width="150" data-angleArc=250 >
</center>

	
                
				
				
				
</div> <!-- panel body -->
				

</div>


</div>


</body>
	
	
	

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/jquery.knob.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script src="http://maps.google.com/maps/api/js?libraries=places&region=ar&language=es&sensor=true"></script>



<script type="text/javascript">

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
	
//document.getElementById("graf_cant").value=aires_tot;		


$('.knob_porc').trigger(
        'configure',
        {
            "fgColor":color_porc
        }
    );		
	
$('.knob_porc')
        .val(eficientes)
        .trigger('change');	
	
//document.getElementById("graf_porc").value=Math.round((eficientes*100)/aires_tot);	


$('.knob_concentracion').trigger(
        'configure',
        {
            "fgColor":color_concentracion
        }
    );		
	
$('.knob_concentracion')
        .val(aires_tot)
        .trigger('change');														
   

   
   },

   error: function(){
            alert("Hubo un problema. Por favor avise a @tengoaire. Gracias.");
        }
    });
	
 }
 
 
 
 estadistica_zona(<?php echo $cord[0];?>,<?php echo $cord[1];?>);





$(document).ready(function() { 

	
	
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

 
<!-- knob -->


</body>
</html>