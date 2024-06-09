<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
<!DOCTYPE html>
<html>
<head>
<title>Trans YanissCar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="images/papa.png">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/fonts/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/user.css" rel="stylesheet">
    <link href="assets/w3css/w3.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
</head>
<body >

<!--<nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="index.php">Yaniss Car</a>
        </div>
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Bienvenue <?php echo $_SESSION['name']; ?> </a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-user"></span> Panneau de Contrôle <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="entercar.php">Ajouter un Véhicule</a></li>
                        <li><a href="enterdriver.php">Ajouter un Chauffeur</a></li>
                        <li><a href="clientview.php">Voir</a></li>
                    </ul>
                </li>
                <li><a href="logout.php">Se déconnecter</a></li>
            </ul>
        </div>
    </div>
</nav>-->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php"><span>Bienvenue <?php echo $_SESSION['name']; ?></span> </a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
                            
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <!--<li class="nav-item active"><a href="index.php" class="nav-link">Bienvenue <?php echo $_SESSION['name']; ?> </a></li>-->
	          <li class="nav-item"><a href="car.php" class="nav-link">Ajouter un Véhicule</a></li>

	          <li class="nav-item"><a href="travel.php" class="nav-link">Ajouter un voyage</a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link">Se déconnecter</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <div class="hero-wrap" style="background-image: url('images/trs.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
          <div class="col-lg-8 ftco-animate">
          	
          </div>
        </div>
      </div>
    </div>
    <br>
    <section class="ftco-section ftco-about ">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/tr1.jpg);">
					</div>
					<div class="col-md-6 wrap-about ftco-animate">
	          <div class="heading-section heading-section-white pl-md-5">
	          	<span class="subheading">À propos</span>
	            <h2 class="mb-4">Bienvenue sur Trans YanissCar</h2>
              <p>YanissCar, société  de transport touristique basée à Oujda, Maroc, offre plus de 12 ans d'expérience, garantissant fiabilité, organisation professionnelle et service exceptionnel.</p>
              <p>
                Nos activités et nos services :voyages de groupe ; location de bus. </p>
                <p>Nous visons à satisfaire tant les besoins que les attentes de nos clients et partenaires, tout en contribuant simultanément à l'essor du secteur touristique au Maroc.</p>
            </div>
					</div>
				</div>
			</div>
		</section>
    <section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Services</span>
            <h2 class="mb-3">Nos derniers services</h2>
          </div>
        </div>
				<div class="row justify-content-center mb-5">
					<div class="col-md-5">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Transport</h3>
                <p>Mini Bus avec chauffeur au maroc.</p>
              </div>
            </div>
					</div>
					<div class="col-md-5">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Voyages Organisés</h3>
                <p>Plusieures destinations partout dans le Maroc, et croyez nous la satisfaction est garantie</p>
              </div>
            </div>
					</div>
				</div>
			</div>
		</section>
    <section class="ftco-section ftco-intro" style="background-image: url(images/tr2.jpg); background-size: cover; background-position: center center;">
      <div class="overlay"></div>
      <div class="container">
          <div class="row justify-content-end">
              <div class="col-md-12 heading-section heading-section-white ftco-animate">
                  <h2 class="mb-3"></h2>
                  <!-- Ajoutez le contenu de votre section ici -->
              </div>
          </div>
      </div>
  </section><br>
    <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">Ce que nous offrons</span>
            <h2 class="mb-2">Véhicules</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="carousel-car owl-carousel">
    					<div class="item">
    						<div class="car-wrap rounded ftco-animate">
		    					<div class="img rounded d-flex align-items-end" style="background-image: url(images/1.jpg);">
		    					</div>
		    					<div class="text">
		    						<h2 class="mb-0"><a href="#">Mercedes Sprinter</a></h2>
		    						<div class="d-flex mb-3">
			    						<span class="cat">M20 places +1</span>
			    						<p class="price ml-auto"><span>|NEUF</span></p>
		    						</div>
		    						<!--<p class="d-flex mb-0 d-block justify-content-end"><a href="a.html" class="btn btn-secondary py-2 ml-1">Details</a></p>-->


		    					</div>
		    				</div>
    					</div>
    					<div class="item">
    						<div class="car-wrap rounded ftco-animate">
		    					<div class="img rounded d-flex align-items-end" style="background-image: url(images/3.jpg);">
		    					</div>
		    					<div class="text">
		    						<h2 class="mb-0"><a href="#">Mercedes Sprinter</a></h2>
		    						<div class="d-flex mb-3">
			    						<span class="cat">20 places +1</span>
			    						<p class="price ml-auto"><span>|NEUF</span></p>
		    						</div>
		    						<!--<p class="d-flex mb-0 d-block justify-content-end"><a href="b.html" class="btn btn-secondary py-2 ml-1">Details</a></p>-->

		    					</div>
		    				</div>
    					</div>
    					<div class="item">
    						<div class="car-wrap rounded ftco-animate">
		    					<div class="img rounded d-flex align-items-end" style="background-image: url(images/2.jpg);">
		    					</div>
		    					<div class="text">
		    						<h2 class="mb-0"><a href="#">Volkswagen Crafter </a></h2>
		    						<div class="d-flex mb-3">
			    						<span class="cat">20 places +1</span>
			    						<p class="price ml-auto"><span>|NEUF</span></p>
		    						</div>
		    						<!--<p class="d-flex mb-0 d-block justify-content-end"><a href="c.html" class="btn btn-secondary py-2 ml-1">Details</a></p>-->

		    					</div>
		    				</div>
    					</div>
    					
    					
    				</div>
    			</div>
    		</div>
    	</div>
    </section>


<!--
    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2 class="mb-3">Happy Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(images/person_2.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(images/person_3.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">System Analyst</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Voyages</span>
            <h2>Voyage récent</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/12.PNG');">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#"></a>ٍVoyage à</div>
                  <!--<div><a href="#">MERZOUGA</a></div>-->
                  
                </div>
                <h3 class="heading mt-2"><a href="#">Ifrane</a></h3>
                <!--<p><a href="#" class="btn btn-primary">En savoir plus</a></p>-->
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/MAR.PNG');">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">ٍVoyage à</a></div>
                  <!--<div><a href="#">Marrakech</a></div>-->
                  
                </div>
                <h3 class="heading mt-2"><a href="#">Merzouga</a></h3>
                <!--<p><a href="#" class="btn btn-primary">En savoir plus</a></p>-->
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/rb.PNG');">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">ٍVoyage à</a></div>
                  <!--<div><a href="#">Marrakech</a></div>-->
                  
                </div>
                <h3 class="heading mt-2"><a href="#">Rabat</a></h3>
                <!--<p><a href="#" class="btn btn-primary">En savoir plus</a></p>-->
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/5.PNG');">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">ٍVoyage à</a></div>
                  <!--<div><a href="#">Marrakech</a></div>-->
                  
                </div>
                <h3 class="heading mt-2"><a href="#">Marrakech</a></h3>
                <!--<p><a href="#" class="btn btn-primary">En savoir plus</a></p>-->
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/ch.PNG');">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">ٍVoyage à</a></div>
                  <!--<div><a href="#">Marrakech</a></div>-->
                  
                </div>
                <h3 class="heading mt-2"><a href="#">Chefchaouen</a></h3>
                <!--<p><a href="#" class="btn btn-primary">En savoir plus</a></p>-->
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/6.PNG');">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">ٍVoyage à</a></div>
                  <!--<div><a href="#">Agadir</a></div>-->
                  
                </div>
                <h3 class="heading mt-2"><a href="#">              Agadir</a></h3>
                <!--<p><a href="#" class="btn btn-primary">En savoir plus</a></p>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>	

    <section class="ftco-counter ftco-section img bg-light" id="section-counter">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row">
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number">12</strong>
                <span>Année <br> d'expérience</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number">3</strong>
                <span>Total <br>de vehicules</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number">+1000</strong>
                <span>Total<br>des voyages </span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text d-flex align-items-center">
                <strong class="number" >1</strong>
                <span>Total <br>Branches</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>	

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><a href="#" class="logo">Trans <span> YanissCar</span></a></h2>
              <p>est une société de tourisme & Transport touristique implantée à Oujda au Maroc.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li ><a href="https://www.facebook.com/yaniss.car.54?mibextid=eHce3h"><span class="icon-facebook"></span></a></li>
                <li><a href="https://www.instagram.com/yanisscar?igsh=OTdpbDc3dGRsZGhy"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">À propos</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
                
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Service client</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">FAQ</a></li>
                <li><a href="#" class="py-2 d-block">Réservez votre minibus</a></li>
                <li><a href="#" class="py-2 d-block">Réservez votre voyage</a></li>
                <li><a href="#" class="py-2 d-block">Contactez-nous</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Vous avez des questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
                  <!-- Adresse -->
                  <li><a href="https://www.google.com/maps/search/?api=1&query=Rue+Berkane+Oujda" target="_blank"><span class="icon icon-map-marker"></span><span class="text">Rue Berkane Oujda</span></a></li>

              
                  <!-- Numéro de téléphone -->
                  <li><a href="tel:+212661889171"><span class="icon icon-phone"></span><span class="text">+212 661 889 171</span></a></li>
              
                  <!-- Adresse e-mail -->
                  <li><a href="mailto:yanisscar@gmail.com"><span class="icon icon-envelope"></span><span class="text">yanisscar@gmail.com</span></a></li>
              </ul>
              
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
   
</body>
</html>

<?php 
} else {
    header("Location: admin.php");
    exit();
}
?>
