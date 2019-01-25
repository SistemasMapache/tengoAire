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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/style_mob.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
<style>
#map_canvas {
    height: 200px;         
    width: 100%;          
}
body {

background-color:rgba(24, 116, 144, 0.69);color:white;
}
body a {
color: rgb(209, 247, 255)
}
</style>



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
</style>

	
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
            <li ><a href="contacto_m.php">Quienes Somos</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->

	
	
	
	
    <!-- Page Content -->
    <div class="container full">
        <div class="row">
            <div class="col-md-12" style="align:left;">
                <h2 class="text-center hero" id="header" >#TengoAire!</h2>
				<p><center>Mapa de aires acondicionados.</center></p>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

    <div class="container dropdown-section">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 dropdown-wrapper">

<form class="form-inline" id="declara">
                    <div class="form-group">
                       <h4>¿Cuantos aires tenés?</h4>		
												<select class="form-control"  id="cant_aire" name="cant_aire">
																<option value="1" >tengo 1 aire</option>
<option value="2">tengo 2 aires</option>
<option value="3">tengo 3 aires</option>
<option value="4">tengo 4 aires</option>
<option value="5">tengo 5 aires</option>
<option value="6">tengo más de 5 aires</option>
																			
												</select>
                    </div>
                    <!-- Single button -->
<div class="form-group">
                     <h4>¿Son <a href="http://www.fvsa.org.ar/ecoeficiencia/aires_etiquetas.php" target="_blank">eficientes</a>?</h4>		
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
<h4>Ubicación Automatica</h4>
	<div id="map_canvas"></div>
	<input type="hidden" id="latlng" name="latlng" /> 
</div>

<div class="form-group">
<h4>Otra dirección?</h4>
<input id="searchTextField" type="text" class="form-control input-lg" style="color:black;"/> 
</div>
	 
<center>		 
<button class="btn btn-primary btn-lg outline" type="submit" id="submit" style="margin-bottom:20px;">Tengo Aire!</button>
</center>

                </form>

            </div><!-- /col-md-6 col-md-offset-3 dropdown-wrapper -->
        </div><!-- /.row -->
    </div><!-- /.container -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script src="http://maps.google.com/maps/api/js?libraries=places&region=ar&language=es&sensor=true"></script>

<script src="js/script.js"></script>



<script type="text/javascript">

$(document).ready(function () {



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
	

	
	
	

$('form').submit(function(e){
e.preventDefault();
    $.ajax({
        type: "POST",
        url: "store/addConsumo.php", //process to mail
        data: $('form').serialize(),
        success: function(msg){
            $(location).attr('href', 'tuZona_m.php?'+$('form').serialize());
        },
        error: function(){
            alert("failure");
        }
    });
});
});
 
 </script>
 
 
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71817711-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>