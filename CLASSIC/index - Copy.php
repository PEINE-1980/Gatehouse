<!DOCTYPE html>
<html class="no-js">
<head>
<!-- Basic Page Needs
        ================================================== -->
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" type="image/png" href="">
<title>Gatehouse - CLASSIC</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<!-- Mobile Specific Metas
        ================================================== -->
<meta name="format-detection" content="telephone=yes">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Template CSS Files
        ================================================== -->
<!-- Twitter Bootstrs CSS -->
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Ionicons Fonts Css 
        <link rel="stylesheet" href="../css/ionicons.min.css">-->
<!-- animate css -->
<link rel="stylesheet" href="../css/animate.css">
<!-- Hero area slider css-->
<link rel="stylesheet" href="../css/slider.css">
<!-- owl craousel css -->
<link rel="stylesheet" href="../css/owl.carousel.css">
<link rel="stylesheet" href="../css/owl.theme.css">
<link rel="stylesheet" href="../css/jquery.fancybox.css">
<!-- template main css file -->
<link rel="stylesheet" href="../css/main.css">
<!-- responsive css -->
<link rel="stylesheet" href="../css/responsive.css">

<!-- Template Javascript Files
        ================================================== -->
<!-- modernizr js -->



<script type="text/javascript"
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript"
	src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/bootstrap.js"></script>

<script type="text/javascript" src="../js/easing.js"></script>

<script type="text/javascript">
			$(function(){
				$('input[name=submit]').click(function(){
					var inputText = document.getElementsByName("email")[0].value
					var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
					if(inputText.match(mailformat))  
					{  
						$.ajax({  
							  type: "POST",  
							  url: "addremovemail.php",  
							  data: $("#contact-form").serialize(),  
							  success: function(data) {  
								$('#popup').html(data);  
							  }  
							});  
							return false; 
					}  
					else  
					{  
						$('#popup').html("Invalid email address!");    
						return false;  
					}  
					 
				});
				$('input[name=remove]').click(function(){
					var inputText = document.getElementsByName("email")[0].value
					var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
					if(inputText.match(mailformat))  
					{  
						$.ajax({  
							  type: "POST",  
							  url: "removeemail.php",  
							  data: $("#contact-form").serialize(),  
							  success: function(data) {  
								$('#popup').html(data);  
							  }  
							});  
							return false;  
					}
					else  
					{  
						$('#popup').html("Invalid email address!");    
						return false;  
					}  
				});
			})
		 </script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<!--
        ==================================================
        Header Section Start
        ================================================== -->
	<header id="top-bar" class="navbar-fixed-top animated-header">
		<nav class="navbar-collapse " role="navigation"
			style="margin-top: 0px; margin-bottom: 0px;">

			<div class="container" id="nav-container">
				<div id="languagePanel">
					<!-- img alt="Italy flag" src="../images/flags/italy-18.png"> -->
					<a href="English/index.php"><img alt="English flag" src="../images/flags/uk-18.png"></a>
				</div>
				<!-- main menu -->

				<div class="navbar-header">
					<!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target="#main-menu">
						<span class="sr-only">Toggle navigation</span> <span
							class="icon-bar"></span> <span class="icon-bar"></span> <span
							class="icon-bar"></span>
					</button>
					<!-- /responsive nav button -->

					<!-- logo -->
					<div class="navbar-brand">
						<a href="index.php"> <img src="../images/gatehouse-logo.png"
							alt="gatehouse logo" style="height: 74px; margin-top: 15px;">
						<a href="index.php"> <img src="../images/Classic-Logo-Trans.png"
							alt="Classic logo" style="height: 84px;">
						</a> 
					</div>
					<!-- /logo -->
				</div>

				<div class="collapse navbar-collapse" id="main-menu">
					<ul class="nav navbar-nav navbar-right">
						<!-- <li><a href="index.php" class="activ">Home</a></li> -->
						<li><a href="exam.html">Exam</a></li>
						<li><a href="support.html">Support</a></li>
						<!-- <li><a href="price_list.html">Price List</a></li> -->
						<li><a href="riconoscimenti.html">Riconoscimenti</a></li>
						<li><a href="centri_desame.html" >Centri d'esame</a></li>
						
						
						<li><a href="centre_support.html">Centre Support</a></li>

						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>

				<!-- /main nav -->
			</div>
		</nav>
	</header>

	<!--
        ==================================================
        Slider Section Start
        ================================================== -->
	<section id="hero-area" style="padding: 150px 0 100px 0;">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-right">
					<div class="block wow fadeInUp" data-wow-delay=".3s">

						<!-- Slider -->
						<section class="cd-intro">
							<h1 class="wow fadeInUp animated cd-headline slide"
								data-wow-delay=".4s">
								<span>Gatehouse Awards</span><br> <span class="cd-words-wrapper">
									<b class="is-visible"></b>



								</span>

							</h1>
						</section>
						<!-- cd-intro -->
						<!-- /.slider -->
						<!--h2 class="wow fadeInUp animated" data-wow-delay=".6s" >
                                    With 10 years experience, I've occupied many roles including digital design director,<br> web designer and developer. This site showcases some of my work.
                                </h2-->
						<p class="wow fadeInUp animated" data-wow-delay=".6s"
							style="color: #666;">
							è l’Ente Certificatore leader del settore, riconosciuto
							dall’<font face="Century Gothic" size="4px"> <i>Office of
									Qualifications and Examinations Regulation, England (Qfqual)</i></font><br>
							e altri organismi di certificazione in tutto il mondo, comprese
							Malta, Italia e Grecia. Con la gamma di certificati in Lingua
							Inglese e qualifiche<br> professionali a disposizione,
							collaboriamo da vicino con le scuole, le università, i datori di
							lavoro e i rappresentanti del mercato<br> per sviluppare e
							offrire le qualifiche innovative e creative in tutto il Regno
							Unito e all’estero.<br>
							<br> Con la nostra reputazione di eccellenza nei servizi di
							assistenza clienti e la nostra competenza nello sviluppo <br> di
							certificazioni eccitanti e di elevata qualità, noi siamo in
							grado di farcela...<br>

						</p>
						<a
							class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green"
							data-wow-delay=".9s" href="docs/accreditamento.pdf"
							data-section="#works">Riconoscimento MIUR</a> <a
							class="btn btn-dafault btn-details" data-wow-delay=".9s"
							href="docs/Overview_of_the_CEFR_Descriptors.pdf"
							data-section="#works">Scala CEFR</a>


					</div>
				</div>
			</div>

			<div class="row">
				<div class="block wow fadeInUp" data-wow-delay=".3s">
					
					<span style="color: #000; font-size: medium;">Regulations and forms available on <a href="support.html">Support page</a>. </span><br>
				</div>
			</div>
		</div>
	</section>
	<!--/#main-slider-->
	<!--
            ==================================================
            Slider Section Start
            ================================================== -->
	<section id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="block wow fadeInLeft" data-wow-delay=".3s"
						data-wow-duration="500ms">
						<h2>Subscribe to News</h2>
						<p>LA NOSTRA NEWSLETTER TI PERMETTERà DI RESTARE AGGIORNATO SULLE
							INIZIATIVE DIDATTICHE E CULTURALI PROPOSTE DA TIE</p>
						<div style="color: #E60000; font-weight: bold; padding-top: 15px;"
							id="popup"></div>
						<div class="contact-form">
							<form id="contact-form" name="newsletter-form"
								onsubmit="return false;" action="" method="post">

								<div class="form-group wow fadeInDown" data-wow-duration="500ms"
									data-wow-delay=".8s">
									<input type="email" placeholder="Email" class="form-control"
										name="email" id="email" name="mailAdresa">
								</div>

								<p style="font-size: 10px; line-height: 12px;">FACENDO CLICK SU
									ISCRIVIMI DICHIARI DI AVERE LETTO E DI ACCETTARE L'INFORMATIVA
									PRIVACY: ART.13 D.L. 30/6/2003 N.196 RECANTE IL CODICE DELLA
									PRIVACY</p>

								<div id="submit" class="wow fadeInDown"
									data-wow-duration="500ms" data-wow-delay="1.4s">

									<input name="submit" type="submit" id="contact-submit"
										class="btn btn-default btn-send" value="Iscrivimi"
										title="Inserisci il tuo indirizzo e-mail nella casella e premi 'Iscrivimi'.">

									<input name="remove" type="submit"
										class="btn btn-default btn-send" value="Rimuovimi"
										title="Se sei gia' un utente registrato e non desideri piu' ricevere i nostri messaggi, inserisci il tuo e-mail, quello con il quale ti eri iscritto,e  fai clic su 'Rimuovimi'.">

								</div>

							</form>
						</div>
					</div>

				</div>
				<div class="col-md-6 col-sm-6">
					<div class="block wow fadeInRight" data-wow-delay=".3s"
						data-wow-duration="500ms">
						<img src="../images/news.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /#about -->
	<!--
            ==================================================
            Portfolio Section Start
            ==================================================
            <section id="works" class="works">
                <div class="container">
                    <div class="section-heading">
                        <h1 class="title wow fadeInDown" data-wow-delay=".3s">Latest Works</h1>
                        <p class="wow fadeInDown" data-wow-delay=".5s">
                            Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere <br> tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                                <div class="img-wrapper">
                                    <img src="../images/portfolio/item-1.jpg" class="img-responsive" alt="this is a title" >
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="../images/portfolio/item-1.jpg">Demo</a>
                                            <a target="_blank" href="single-portfolio.html">Details</a>
                                        </div>
                                    </div>
                                </div>
                                <figcaption>
                                <h4>
                                <a href="#">
                                    Dew Drop
                                </a>
                                </h4>
                                <p>
                                    Redesigne UI Concept
                                </p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                <div class="img-wrapper">
                                    <img src="../images/portfolio/item-2.jpg" class="img-responsive" alt="this is a title" >
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="../images/portfolio/item-2.jpg">Demo</a>
                                            <a target="_blank" href="single-portfolio.html">Details</a>
                                        </div>
                                    </div>
                                </div>
                                <figcaption>
                                <h4>
                                <a href="#">
                                    Bottle Mockup
                                </a>
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit.
                                </p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                <div class="img-wrapper">
                                    <img src="../images/portfolio/item-3.jpg" class="img-responsive" alt="" >
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="../images/portfolio/item-3.jpg">Demo</a>
                                            <a target="_blank" href="single-portfolio.html">Details</a>
                                        </div>
                                    </div>
                                </div>
                                <figcaption>
                                <h4>
                                <a href="#">
                                    Table Design
                                </a>
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit amet.
                                </p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="600ms">
                                <div class="img-wrapper">
                                    <img src="../images/portfolio/item-4.jpg" class="img-responsive" alt="" >
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="../images/portfolio/item-4.jpg">Demo</a>
                                            <a target="_blank" href="single-portfolio.html">Details</a>
                                        </div>
                                    </div>
                                </div>
                                <figcaption>
                                <h4>
                                <a href="#">
                                    Make Up elements
                                </a>
                                </h4>
                                <p>
                                    Lorem ipsum dolor.
                                </p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="900ms">
                                <div class="img-wrapper">
                                    <img src="../images/portfolio/item-5.jpg" class="img-responsive" alt="" >
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="../images/portfolio/item-5.jpg">Demo</a>
                                            <a target="_blank" href="single-portfolio.html">Details</a>
                                        </div>
                                    </div>
                                </div>
                                <figcaption>
                                <h4>
                                <a href="#">
                                    Shoping Bag Concept
                                </a>
                                </h4>
                                <p>
                                    Lorem ipsum dolor.
                                </p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                                <div class="img-wrapper">
                                    <img src="../images/portfolio/item-6.jpg" class="img-responsive" alt="" >
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="../images/portfolio/item-6.jpg">Demo</a>
                                            <a target="_blank" href="single-portfolio.html">Details</a>
                                        </div>
                                    </div>
                                </div>
                                <figcaption>
                                <h4>
                                <a href="#">
                                    Caramel Bottle
                                </a>
                                </h4>
                                <p>
                                    Lorem ipsum dolor.
                                </p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>  -->
	<!-- #works -->
	<!--
            ==================================================
            Portfolio Section Start
            ==================================================
            <section id="feature">
                <div class="container">
                    <div class="section-heading">
                        <h1 class="title wow fadeInDown" data-wow-delay=".3s">Offer From Me</h1>
                        <p class="wow fadeInDown" data-wow-delay=".5s">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed,<br> quasi dolores numquam dolor vero ex, tempora commodi repellendus quod laborum.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-ios-flask-outline"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Media heading</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="600ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-ios-lightbulb-outline"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Well documented.</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="900ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-ios-lightbulb-outline"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Well documented.</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-ios-americanfootball-outline"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Free updates</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1500ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-ios-keypad-outline"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Solid Support</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1800ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-ios-barcode-outline"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Simple Installation</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!-- /#feature -->

	<!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
	<section id="call-to-action">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<!--
                                <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms"></h1>
                                <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms"></p>
                                <a href="contact.html" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact With Me</a>
-->
					</div>
				</div>

			</div>
		</div>
	</section>
	<!--
            ==================================================
            Footer Section Start
            ================================================== -->
	<footer id="footer">
		<div class="container">
			<div class="col-md-8">
				<p class="copyright">
					Copyright: <span>2016</span>
				</p>
			</div>
			<div class="col-md-4">
				<!-- Social Media -->
				<!--
                        <ul class="social">
                            <li>
                                <a href="http://wwww.fb.com/themefisher" class="Facebook">
                                    <i class="ion-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://wwww.twitter.com/themefisher" class="Twitter">
                                    <i class="ion-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="Linkedin">
                                    <i class="ion-social-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://wwww.fb.com/themefisher" class="Google Plus">
                                    <i class="ion-social-googleplus"></i>
                                </a>
                            </li>
                        </ul>
-->
			</div>
		</div>
	</footer>
	<!-- /#footer -->

</body>
</html>