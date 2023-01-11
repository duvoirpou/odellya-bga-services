<?php
    $activePage = basename($_SERVER['PHP_SELF'], ".php");
?>

<!-- Loader -->
<div id="site-loader" class="load-complete">
		<div class="loader">
			<div class="loader-inner ball-clip-rotate">
				<div></div>
			</div>
		</div>
	</div><!-- Loader /- -->
	
	<!-- Header -->
	<header class="header-section container-fluid no-padding">
		<!-- Top Header -->
		<div class="top-header container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<!-- Social -->
				<div class="col-md-5 col-sm-6 col-xs-12 header-social"> 
					<h5>Suivez-nous :</h5>
					<ul>
						<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div><!-- Social /- -->
				<div class="col-md-7 col-sm-6 col-xs-12 info">
					<p><i class="icon icon-Phone2"></i><a href="tel:+1234567890" title="Phone" class="phone">Appelez-nous: +242 06 614 95 07/05 673 26 07</a></p>
					<p><i class="icon icon-Imbox"></i><a href="mailto:info@Cleaningcsb.com" title="info@Cleaningcsb.com">Email: bgaservices01@gmail.com</a></p>
				</div>
			</div><!-- Container /- -->
		</div><!-- Top Header /- -->
		
		<!-- Menu Block -->
		<div class="container-fluid no-padding menu-block">
			<!-- Container -->
			<div class="container">
				<!-- nav -->
				<nav class="navbar navbar-default ow-navigation">
					<div class="navbar-header">
						<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a title="Logo" href="index.html" class="navbar-brand"><img src="images/bga-services-logo.png" style="width: 80px;" alt="logo"></a>
					</div>
					<div class="navbar-collapse collapse navbar-right" id="navbar">
						<ul class="nav navbar-nav">
							<!-- <li class="dropdown">
								<a href="index.html" title="Home" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
								<i class="ddl-switch fa fa-angle-down"></i>
								<ul class="dropdown-menu">	
									<li><a href="index.html" title="Home 1">Home 1</a></li>
									<li><a href="index2.html" title="Home 2">Home 2</a></li>
								</ul>
							</li> -->
							<li class="<?= ($activePage == 'index') ? 'active':''; ?>"><a title="Accueil" href="index.php">Accueil</a></li>
							<li class="<?= ($activePage == 'contact') ? 'active':''; ?>"><a title="Contact" href="contact.php">Contact</a></li>
							<!-- <li><a title="A propos" href="about.php">A propos</a></li> -->
							<!-- <li class="dropdown">
								<a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" title="Services" href="services.html">Services</a>
								<i class="ddl-switch fa fa-angle-down"></i>
								<ul class="dropdown-menu">	
									<li><a title="Service Single" href="service-single.html">Service Single</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" title="Our Blog" href="blog.html">Our Blog</a>
								<i class="ddl-switch fa fa-angle-down"></i>
								<ul class="dropdown-menu">	
									<li><a title="Blog" href="blog.html">Blog</a></li>
									<li><a title="Blog Post" href="blog-post.html">Blog Post</a></li>
								</ul>
							</li> -->
							<!-- <li class="dropdown active">
								<a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" title="Contact Us" href="contact-us.html">Contact Us</a>
								<i class="ddl-switch fa fa-angle-down"></i>
								<ul class="dropdown-menu">	
									<li><a title="Contact 1" href="contact-01.html">Contact 1</a></li>
									<li><a title="Contact 2" href="contact-02.html">Contact 2</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" title="portfolio" href="#gallery-section">portfolio</a>
								<i class="ddl-switch fa fa-angle-down"></i>
								<ul class="dropdown-menu">	
									<li><a title="Gallery 01" href="gallery-01.html">Gallery 01</a></li>
									<li><a title="Gallery 02" href="gallery-02.html">Gallery 02</a></li>
									<li><a title="Gallery Single" href="gallery-single.html">Gallery Single</a></li>
								</ul>
							</li> -->
						</ul>
					</div><!--/.nav-collapse -->
				</nav><!-- nav /- -->
			</div><!-- Container /- -->
		</div><!-- Menu Block /- -->
	</header><!-- Header /- -->