<!DOCTYPE html>

<html lang="en">

<head>

<!-- -->

<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head 

         content must come *after* these tags -->

    <title>Index</title>

    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet">

    <link href="bootstrap-3.3.7-dist/css/myFile.css" rel="stylesheet">

    <link href="bootstrap-3.3.7-dist/css/bootstrap-datepicker3.css" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
	<link href="inc/js/jquery-ui.css" rel="stylesheet"> 
 <script src="inc/js/jquery-3.2.1.min.js"></script>
<script src="inc/js/jquery-ui.js" > </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap-datepicker.min.js"></script>



<link href="bootstrap-3.3.7-dist/css/font-awesome.css" rel="stylesheet">

<link href="bootstrap-3.3.7-dist/css/font-awesome.min.css" rel="stylesheet">



<!-- Include Required Prerequisites -->

<script type="text/javascript" src="inc/js/moment.min.js"></script>

 

<!-- Include Date Range Picker -->

<script type="text/javascript" src="inc/js/daterangepicker.js"></script>

<link rel="stylesheet" type="text/css" href="inc/css/daterangepicker.css" />	

</head>

<?php 
if($_SERVER['REQUEST_METHOD']=='POST')
{
	if(isset($_POST['login'])){
		require 'login.php';
	}
}
?>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

    <div class="container">

	<div class="navbar-header">

	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"

	data-target="#navbar" aria-expanded="false" aria-controls="navbar">

	<span class="sr-only">Toggle navigation</span>

	<span class="icon-bar"></span>

	<span class="icon-bar"></span>

	<span class="icon-bar"></span>

	</button>

	

	<a class="navbar-brand" href="#"><img src="img/logos/logo_topbar.png" height=30 width=50></a>

	</div>

	<div id="navbar" class="navbar-collapse collapse">

	<ul class="nav navbar-nav">

	<li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"

                         aria-hidden="true">Home</span></a></li>

	<li><a href="gallery.php"><span class="glyphicon glyphicon-picture"

                         aria-hidden="true">Gallery</span></a></li>

	<li class="dropdown">

	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"

	aria-haspopup="true" aria expanded="false"><span class="glyphicon glyphicon-list-alt" aria-hidden="true">Services</span><span class="caret"></span>

	</a>

	<ul class="dropdown-menu">

	<li><a href="#">Wedding Hall</a></li>

	<li><a href="#">Conference Hall</a></li>

	<li><a href="#">Pandal Space</a></li>

	<li><a href="#">Mandap</a></li>
	<li><a href="#">Terrace</a></li>

	<li><a href="#">Rooms</a></li>


<!--	<li role="separator" class="divider">

	<li class="dropdown-header">Specials</li>



	<li><a href="#">Weekend special</a></li>

	</li> -->

	</ul>

	<li><a href="aboutUs.php"><i class="fa fa-envelope-o"></i>Contact</a></li>

	</ul>

	<ul class="nav navbar-nav navbar-right"> <li><a data-toggle="modal" data-target="#loginModal">

	<span class="glyphicon glyphicon-log-in"></span>Login</a>

	</li>

	</ul>

	</div>

	</div>

</nav>

<div id="loginModal" class="modal fade" role="dialog">

<div class="modal-dialog">

<div class="modal-header">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title"><font color="white">Login</font></h4>

</div>

<div class="modal-body">

<form class="form-inline" role="login" method="post" action="login.php">

  <div class="form-group">

   <label class="sr-only" for="Email" >Email address</label>

  <input type="text" class="form-control" placeholder="Email" name="Email">

  </div>

  <div class="form-group">

   <label class="sr-only" for="Email" >Password</label>

    <input type="text" class="form-control" placeholder="Password" name="Password">

	</div>

  <div class="checkbox">

<input type="checkbox" autocomplete="off" ><font color="white">Remember me</font>	</div>

  <button type="submit" class="btn btn-info btn-sm" value="submit" name="login" >Sign In</button>

  <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>

</form>

</div>

</div>

</div>


<!--
<input type="text" name="daterange" value="01/01/2017 - 12/31/2017" />

	<script type="text/javascript">

		$(function() {

		    $('input[name="daterange"]').daterangepicker();

		});

	</script>

-->

<header class="jumbotron">

        <!-- Main component for a primary marketing message or call to action -->

        <div class="container">

		

            <div class="row">

                <div class="col-xs-8 col-sm-8 ">
	<style> 
@font-face {
    font-family: myFirstFont;
    src: url(inc/fonts/Allura-Regular.ttf);
}
</style>	
                    <h1 style="font-family: myFirstFont"> <i>CELEBRATION</h1>
		

                    <p style="padding:5px ; "> <font face="Verdana" size=5>Turn your event into wonderful <i>CELEBRATION!</i></font></p>

                </div>

                <div class="col-xs-2 col-sm-2">

				<img src="img/logos/logo_large.png" class="img-responsive" >

                </div>

				<div class="col-xs-12 col-sm-2">

				<a button type="button" class="btn btn-warning btn-block" data-toggle="modal" data-target="#reserveTable">Available Dates </a>

				</div>

<div id="reserveTable" class="modal fade" role="dialog">

<div class="modal-dialog">

<div class="modal-header">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Available dates</h4>

</div>

<div class="modal-body">
<style>
		.form-inline { 
				background-color : #ccccff !important;
			     }
</style>

<form class="form-inline" role="reserve"  >
		<script>
		$(document).ready(function(){
				var date_input=$('input[name="calendar"]'); //our date input has the name "date"
				var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
				date_input.datepicker({
					format: 'mm/dd/yyyy',
					container: container,
					todayHighlight: true,
					autoclose: true,
					startDate: truncateDate(new Date()),
					//minDate:-0,
					//maxDate:+2,
					});
					$('#date').datepicker('setStartDate', truncateDate(new Date()));
				// $("#calendar").datepicker()});

		});

function truncateDate(date) {
	  return new Date(date.getFullYear(), date.getMonth(), date.getDate());
}




		</script>

<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;} .requiredField{color: Black !important;}</style>
			
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-8 col-sm-8 col-xs-12">
    <form class="form-horizontal" method="post">
     <div class="form-group ">
      <label class="control-label col-sm-4 requiredField" for="calendar">
       Available Dates
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="col-sm-8">
       <div class="input-group">
        <div class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>
        <input class="form-control" id="calendar" name="calendar" placeholder="Select a date!" type="text"/>
       </div>
      </div>
     </div>
     <div class="form-group">
      <div class="col-sm-8 col-sm-offset-12">
       <button class="btn btn-primary " name="submit" type="submit">
        Book Now
       </button>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>	

<!--			<div class=wrapper>
			<input class="form-control" id="calendar" name="calendar" placeholder="MM/DD/YYYY" type="text"/>	
			-<input type="text" id="calendar1" name="calend>
			</div>

			<p style="padding:16%;"></p>

			<div >

			<button type="button" class="btn btn-primary">Reserve</button>

			  <p style="padding:10px;"></p>

			</div> -->

			<div class="alert alert-warning alert-dismissible" role="alert" >

			<button type="button" class="close" data-dismiss="alert" aria-label="close">

			<span aria-hidden="true">&times;</span>

			</button>

			<strong>Warning:</strong>: Please <a href="tel:+919985604553" class="alert-link">call</a>

			us to reserve for more than six guests.

			</div>

			</div>

</form>

</div>

</div>

</div>

            </div>

        

    </header>


	<style>
		.carousel-inner{width:100% !important;
				margin-left: 0% !important;
				margin-right: 0% !important;
				height: 100% !important;
				}
		.carousel-caption{text-align: right !important;}
		.container{width: 100% !important;
			  margin-left: 0% !important;
			  margin-right: 0% !important;
			 top-margin: 0% !important;
			height:100% !important}

	</style>
    <div class="container">

	<div class="row row-content">

	<div class="col-xs-12">
	<div id="mycarousel" class="carousel slide" data-ride="carousel">

	<ol class="carousel-indicators">

                    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>

                    <li data-target="#mycarousel" data-slide-to="1"></li>

                    <li data-target="#mycarousel" data-slide-to="2"></li>

                </ol>

	<div class="carousel-inner" role="listbox">

	<div class="item active">

	<img class="img-responsive" src="img/celebration1.png" alt="celebration1" width="600" height="200">

	<div class="carousel-caption">

	<h2>Wedding Stage <!--<span class="label label-danger label-xs">Hot</span> <span class="badge">$4.99</span> --> </h2>
		<p>There are so many ideas to decor your Mehndi,<br> Sangeet and  Wedding stage.  <p>

                <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>

	</div>

	</div>

	<div class="item">

	<img class="img-responsive" src="img/celebration3.png" alt="celebration3" width="600" height="200">

	<div class="carousel-caption">

	<h2>Super Elegant Wedding Hall

<!--	<span class="label label-danger label-xs">New</span> -->

	</h2>

	<p>You have options to follow various wedding <br> decor trends on a budget. It is easily <br> possible in this spacious hall. </p>

     <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>

     </div>

</div>

<div class="item">

<img class="img-responsive" src="img/celebration2.png" alt="celebration2" width="600" height="200">

<div class="carousel-caption">

 <h2>Stunning Floral Mandap</h2>

                <p>Gone are the days when weddings were an <br> indoor event. So you have option to <br> place the mandap outdoor. </p>

                <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>

            </div>

</div>

</div>

<a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">

                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>

                    <span class="sr-only">Previous</span>

                </a>

                <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">

                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>

                    <span class="sr-only">Next</span>

                </a>

</div>

</div>

</div>


<footer class="row-footer" background="grey">

        <div class="container">

            <div class="row">             

                <div class="col-xs-5 col-xs-offset-1 col-sm-2 col-sm-offset-1">

                    <h5>Links</h5>

                    <ul class="list-unstyled">

                        <li><a href="#">Home</a></li>

                        <li><a href="#">About</a></li>

                        <li><a href="#">Menu</a></li>

                        <li><a href="#">Contact</a></li>

                    </ul>

                </div>

                <div class="col-xs-6 col-sm-5">

                    <h5>Our Address</h5>

                    <address>

		              Near Shanti Ashram<br>

		              Badka Gaun Road, Hazaribagh<br>


		              JHARKHAND<br>

		              <i class="fa fa-phone"></i>: +852 1234 5678<br>

		              <i class="fa fa-fax"></i>: +852 8765 4321<br>

		              <i class="fa fa-envelope"></i>: 

                        <a href="mailto:confusion@food.net">confusion@food.net</a>

		           </address>

                </div>

                <div class="col-xs-12 col-sm-4">

                    <div class="nav navbar-nav" style="padding: 40px 10px;">

                        <a class="btn btn-social-icon btn-google-plus" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>

                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>

                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>

                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>

                        <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>

                        <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o"></i></a>

                    </div>

                </div>

                <div class="col-xs-12">

                    <p style="padding:10px;"></p>

                    <p align=center>© Copyright 2015 Ristorante Con Fusion</p>

                </div>

            </div>

        </div>

    </footer>

	

</body>

</html>



