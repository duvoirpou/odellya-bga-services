<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="" lang="en"><!--<![endif]-->
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

	<title>BGA-SERVICES</title>

	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="images/bga-services-logo.png" />
	
	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images//apple-touch-icon-114x114-precomposed.png">
	
	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images//apple-touch-icon-72x72-precomposed.png">
	
	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="images//apple-touch-icon-57x57-precomposed.png">

	<!-- Library - Google Font Familys -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
 
	<!-- RS5.0 Layers and Navigation Styles -->
	<link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">
	
	<!-- Library - Bootstrap v3.3.5 -->
    <link rel="stylesheet" type="text/css" href="libraries/lib.css">
	
	<!-- Custom - Common CSS -->
	<link rel="stylesheet" type="text/css" href="css/plugins.css">
	<link rel="stylesheet" type="text/css" href="css/navigation-menu.css">	
	
	<!-- Custom - Theme CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->
	
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
	<?php
		include('partials/header.php');
	?>
	
	<main>
		<!-- Page Banner -->
		<div class="page-banner container-fluid">
			<!-- Container -->
			<div class="container">
				<div class="banner-content">
					<h3>Contact</h3>
					<ol class="breadcrumb">
						<li><a href="index.php" title="Accueil">Accueil</a></li>							
						<li class="active">Contact</li>
					</ol>
				</div>
			</div><!-- Container /- -->
		</div><!-- Page Banner /- -->
		
		<!-- Contact Us 1 -->
		<div class="contact-us-1 container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<!-- Section Header -->
				<div class="section-header">
					<h3>Ecrivez-nous en cas de besoin</h3>
				</div><!-- Section Header /- -->
				<form action="actions/trt_contact.php" method="POST">
					<div class="col-md-4 col-sm-4 col-xs-12 form-group">
						<input type="text" name="name" class="form-control" id="input_name" placeholder="Votre nom" required/>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 form-group">
						<input type="text" name="email" class="form-control" id="input_email" placeholder="Votre email" required/>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 form-group">
						<input type="text" required="" placeholder="Sujet" id="input_subject" class="form-control" name="subject">
					</div>
					<div class="form-group col-md-12 col-sm-12 col-xs-12">
						<textarea placeholder="Message" id="textarea_message" name="message" rows="5" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<button title="Submit" type="submit" id="btn_submit" name="post">Envoyez</button>
					</div>
					<div id="alert-msg" class="alert-msg"></div>
				</form>
				<div class="contact-detail">
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="contact-content">
							<i class="fa fa-phone"></i>
							<h5>Appelez-nous</h5>
							<p><b><a href="tel:+242066149507" title="Phone" class="phone">+242 06 614 95 07</a></b></p>
							<p><b><a href="tel:+242056732607" title="Phone" class="phone">+242 05 673 26 37</a></b></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="contact-content">
							<i class="fa fa-paper-plane-o"></i>
							<h5>Ecrivez-nous</h5>
							<p><b><a href="mailto:bgaservices01@gmail.com" title="bgaservices01@gmail.com">bgaservices01@gmail.com</a></b></p>
							<br>
							<!-- <p><a href="mailto:info@MaxCleaningcsb.com" title="info@MaxCleaningcsb.com">info@MaxCleaningcsb.com</a></p> -->
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="contact-content">
							<i class="fa fa-home"></i>
							<h5>Adresse</h5>
							<p><b><a >04 Ter rue Banziris, Poto-Poto Brazzaville</a></b></p>
							<br>
							<!-- <p>Victoria, Australia.</p> -->
						</div>
					</div>
				</div>
			</div><!-- Container /- -->

			<!-- Map Section -->
			<div class="map container-fluid no-padding">
				<!-- <div class="map-canvas" id="map-canvas-contact" data-lat="-37.471308" data-lng="144.785153" data-string="Maxcleaning Inc, 06 Highley St,Victoria, Australia." data-zoom="12"></div> -->
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254666.27001307392!2d15.16922179967317!3d-4.188828925467563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6bc977861901fb%3A0xb8f3487c5a3492e2!2zTWFyY2jDqSBQw6lhZ2UgZGUgS2ludGVsw6k!5e0!3m2!1sfr!2scg!4v1673429660457!5m2!1sfr!2scg" style="border:0; width: 100%; height: 450px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div><!--  Map Section /- -->
		</div><!-- Contact Us 1 -->
	</main>
	
	<?php
		include('partials/footer.php');
	?>
	
	<!-- JQuery v1.11.3 -->
	<script src="js/jquery.min.js"></script>

	<!-- Library - Js -->
	<script src="libraries/lib.js"></script><!-- Bootstrap JS File v3.3.5 -->

	<!-- RS5.0 Core JS Files -->
	<script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
	<script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	
	<!-- Library - Google Map API -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDW40y4kdsjsz714OVTvrw7woVCpD8EbLE"></script>
	
	<!-- Library - Theme JS -->
	<script src="js/functions.js"></script>
</body>
</html>