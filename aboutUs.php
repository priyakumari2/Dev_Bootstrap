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

<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
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

	<button type="button" class="navbar-toggle collapsed" data-toggle="col	lapse"

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

	<li> <a href="index.php"><span class="glyphicon glyphicon-home"

                         aria-hidden="true">Home</span></a></li>

	<li ><a href="gallery.php"><span class="glyphicon glyphicon-picture"

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

	<li class="active"><a href="aboutUs.php"><i class="fa fa-envelope-o"></i>Contact</a></li>

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

<body>
<style> .jumbotron{height:600px;}</style>
<header class="jumbotron">
<div class="container">
<center>
	<style> 
@font-face {
    font-family: myFirstFont;
    src: url(inc/fonts/PlayfairDisplay-Italic.otf);
    font-family: mySecFont;
    src: url(inc/fonts/PlayfairDisplay-Regular.otf);

}
</style>	
		    <h2 style="font-family: myFirstFont"> --------------- CONTACT US ---------------</h2>

<h2 style="font-family: mySecFont">Near Markham College, Badka Gaon Road, Hazaribagh, Jharkhand 825301, India </h2>

<h2 style="font-family: mySecFont">Tel : 06546-2227946 </h2>

<h2 style="font-family: mySecFont">Mobile : 9431190666/9431383386 </h2>

<h2 style="font-family: mySecFont">Email : pawan.bit@gmail.com </h2>


</center>
</div>
</header>
</body>
</html>
