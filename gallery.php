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

<div>	

	<a class="navbar-brand" href="#"><img src="img/logos/logo_topbar.png" height=30 width=50></a>
</div>
	</div>

	<div id="navbar" class="navbar-collapse collapse">

	<ul class="nav navbar-nav">

	<li> <a href="index.php"><span class="glyphicon glyphicon-home"

                         aria-hidden="true">Home</span></a></li>

	<li class="active"><a href="gallery.php"><span class="glyphicon glyphicon-picture"

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

<body>
<header class="jumbotron">
<center>
	<style>
#foo img

@font-face {
    font-family: myFirstFont;
    src: url(inc/fonts/PlayfairDisplay-Italic.otf);
    font-family: mySecFont;
    src: url(inc/fonts/PlayfairDisplay-Regular.otf);

}
.myStyle{height:200px !important;
	width:300px !important;}
</style>	

<h2 style="font-family:myFirstFont">Image Gallery</h2>

</header>


<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="/img/1.jpg" class="thumbnail">
                <p>Gate</p>
                <img src="/img/1.jpg" class="myStyle"/>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="/img/2.jpg" class="thumbnail">
                <p>Pandaal</p>
                <img src="/img/2.jpg" class="myStyle"/>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="/img/3.jpg" class="thumbnail">
                <p>Lights</p>
                <img src="/img/3.jpg"  class="myStyle"/>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="/img/4.jpg" class="thumbnail">
                <p>Pandaal</p>
                <img src="/img/4.jpg"  class="myStyle"/>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="/img/5.jpg" class="thumbnail">
                <p>Hall</p>
                <img src="/img/5.jpg"  class="myStyle"/>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="/img/6.jpg" class="thumbnail">
                <p>Entrance</p>
                <img src="/img/6.jpg"  class="myStyle"/>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="/img/7.jpg" class="thumbnail">
                <p>Rooms</p>
                <img src="/img/7.jpg" class="myStyle" />
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="/img/8.jpg" class="thumbnail">
                <p>Conference Hall</p>
                <img src="/img/8.jpg"  class="myStyle"/>
            </a>
        </div>
    </div>
</div>
</body>
</html>
