<!DOCTYPE html>

<html lang="en">
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
</head>

<?php 



$valor_porc= 25;
if ($valor_porc <= 33 ) { $color_porc = '#ee6666';}
elseif ($valor_porc > 33 && $valor_porc <= 66) { $color_porc = '#eeee66';}
else { $color_porc = '#66EE66';}




$valor_concentracion=79;
if ($valor_concentracion <= 42 ) { $color_concentracion = '#66EE66';}
elseif ($valor_concentracion > 42 && $valor_concentracion <= 84) { $color_concentracion = '#eeee66';}
else  { $color_concentracion = '#ee6666';}



?>	


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
            <li><a href="mapa_m.php">Mapa</a></li>
            <li class="active"><a href="contacto_m.php">Quienes Somos</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->



	
<div id="page-content">

 
<div class="panel panel-info">




<div class="panel-heading">
<p> Somos <B>Mapache</B>, un equipo de trabajo con experiencia en brindar servicios integrales e innovadores que generen valor agregado. </p>
<p>Trabajamos con <i class="fa fa-heart" style="color:red;"></i> usando tecnologías de código abierto, obteniendo productos finales a menores costos. </p>

</div>





<div class="panel-body">






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
<img src="images/smapache.png" width="100px;" style="
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