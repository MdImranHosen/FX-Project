<?php

   /* Cache control or Cache Remove */
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!--
Md Imran Hosen
web developer
www.github.com/mdimranhosen
-->
	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
    <title>FX Trading</title>
    <meta name="description" content="">	
	<meta name="author" content="Md Imran Hosen">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Favicons
	================================================== -->
	<link rel="icon" href="images/logo9.png" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.png">
	
	<!-- CSS
	================================================== -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Template styles-->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Prettyphoto -->
	<link rel="stylesheet" href="css/prettyPhoto.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/cd-hero.css">
	<!-- Style Swicther -->
	<link id="style-switch" href="css/presets/preset3.css" media="screen" rel="stylesheet" type="text/css">
	

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <style>
    *{
        font-family:'Roboto', sans-serif;
    }
    	.navbar-brand.navbar-bg {
           /* background: #fff;*/
            margin-top: 5px;
            height: 123px;
            line-height: 130px;
            margin-left: 5px;
           /* border: 7px solid red;*/
            border-radius: 52%;
        }
        .navbar-brand img {
            padding: 5px 5px;
        }
        .title-desc {
            text-transform:none;
        }
        .fxtrading-corporation{}
        .fxtrading-corporation h2 {
            font-size: 35px;
            color: #45319e;
            font-weight: normal;
            text-transform: none;
            font-family: 'Roboto', sans-serif;
            padding-bottom:30px;
        }
        .fxtrading-corporation strong {color:#000;font-weight:700;}
        .fxtrading-corporation p{line-height: 32px;font-family:'Roboto', sans-serif;text-align:justify;color:#000;font-size:16px;}
        .how-it-works-style h3{
            font-family: 'Roboto', sans-serif;
            text-transform: none;
            color:#45319E;
            font-weight:700;
        }
        .how-it-works-style p{
            font-family: 'Roboto', sans-serif;
            color:#000;
            text-align:justify;
            padding:0 6px;
        }
         /* ===========================
--- Contact
============================ */


.form-group {
  margin-bottom: 20px;
}

form#contact-form .form-group label {
	text-align: left !important;
	display: block;
	text-transform: uppercase;
	font-size: 16px;
}
form#contact-form input,form#contact-form select,form#contact-form textarea {
	font-size: 18px;
	line-height: 1.6em;
	border: 1px solid #eee;
  -webkit-box-shadow: none;
          box-shadow:  none;
	border-radius: 2px;
}

.btn-lg,
.btn-group-lg > .btn {
  border-radius: 2px;
}

form#contact-form input:focus,form#contact-form select:focus,form#contact-form textarea:focus {
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
          box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
}
.input-group-addon {
  background-color: #fefefe;
  border: 1px solid #eee;
}

.widget-contact {
	text-align: left;
}

.validation {
    color: red;
    display:none;
    margin: 0 0 20px;
    font-weight:400;
    font-size:13px;
}

#sendmessage {
    color: green;
    border:1px solid green;
    display:none;
    text-align:center;
    padding:15px;
    font-weight:600;
    margin-bottom:15px;
}

#errormessage {
    color: red;
    display:none;
    border:1px solid red;
    text-align:center;
    padding:15px;
    font-weight:600;
    margin-bottom:15px;
}

#sendmessage.show, #errormessage.show, .show {
	display:block;
}

/* =======Responsive style======= */
@media screen and (max-width: 1180px){
   .fxtrading-corporation h2 {
            font-size: 30px;
            padding-bottom:20px;
        } 
}


    </style>

</head>
	
<body>

	<!-- Style switcher start -->
	<!-- <div class="style-switch-wrapper">
		<div class="style-switch-button">
			<i class="fa fa-sliders"></i>
		</div>
		<h3>Style Options</h3>
		<button id="preset1" class="btn btn-sm btn-primary"></button>
		<button id="preset2" class="btn btn-sm btn-primary"></button>
		<button id="preset3" class="btn btn-sm btn-primary"></button>
		<button id="preset4" class="btn btn-sm btn-primary"></button>
		<button id="preset5" class="btn btn-sm btn-primary"></button>
		<button id="preset6" class="btn btn-sm btn-primary"></button>
		<br/><br/>
		<a class="btn btn-sm btn-primary close-styler pull-right">Close X</a>
	</div> -->
	<!-- Style switcher end -->

	<div class="body-inner">

	<!-- Header start -->
	<header id="header" class="navbar-fixed-top header" role="banner">
		<div class="container">
			<div class="row">
				<!-- Logo start -->
				<div class="navbar-header">
				   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				    </button>
				    <div class="navbar-brand navbar-bg">
					    <a href="index.php">
					    	<img class="img-responsive" height="130px" width="auto" src="images/LOGO10.png" style="" alt="logo">
					    </a> 
				    </div>                   
				</div><!--/ Logo end -->
				<nav class="collapse navbar-collapse clearfix" role="navigation">
					<ul class="nav navbar-nav navbar-right">
					
            			<li><a href="index.php">Home</a></li>
            			<li><a href="#about">About Us</a></li>
            			<li><a href="#about">Our Mission</a></li>
            			<li><a href="#contact">Contact</a></li>
                    </ul>
				</nav><!--/ Navigation end -->
			</div><!--/ Row end -->
		</div><!--/ Container end -->
	</header><!--/ Header end -->
