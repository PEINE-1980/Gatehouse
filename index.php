<!DOCTYPE html>
<html class="no-js">
<head>
<!-- Basic Page Needs
        ================================================== -->
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" type="image/png" href="">
<title>Gatehouse Awards</title>
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
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Ionicons Fonts Css 
        <link rel="stylesheet" href="css/ionicons.min.css">-->
<!-- animate css -->
<link rel="stylesheet" href="css/animate.css">
<!-- Hero area slider css-->
<link rel="stylesheet" href="css/slider.css">
<!-- owl craousel css -->
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<!-- template main css file -->
<link rel="stylesheet" href="css/main.css">
<!-- responsive css -->
<link rel="stylesheet" href="css/responsive.css">

<!-- Template Javascript Files
        ================================================== -->
<!-- modernizr js -->



<script type="text/javascript"
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript"
	src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>

<script type="text/javascript" src="js/easing.js"></script>

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
<script type="text/javascript">
		 	if (typeof jQuery === 'undefined') {
  throw new Error('Bootstrap\'s JavaScript requires jQuery')
}
+function ($) {
  'use strict';
  var version = $.fn.jquery.split(' ')[0].split('.')
  if ((version[0] < 2 && version[1] < 9) || (version[0] == 1 && version[1] == 9 && version[2] < 1) || (version[0] > 2)) {
    throw new Error('Bootstrap\'s JavaScript requires jQuery version 1.9.1 or higher, but lower than version 3')
  }
}(jQuery);

/* ========================================================================
 * Bootstrap: dropdown.js v3.3.6
 * http://getbootstrap.com/javascript/#dropdowns
 * ========================================================================
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // DROPDOWN CLASS DEFINITION
  // =========================

  var backdrop = '.dropdown-backdrop'
  var toggle   = '[data-toggle="dropdown"]'
  var Dropdown = function (element) {
    $(element).on('click.bs.dropdown', this.toggle)
  }

  Dropdown.VERSION = '3.3.6'

  function getParent($this) {
    var selector = $this.attr('data-target')

    if (!selector) {
      selector = $this.attr('href')
      selector = selector && /#[A-Za-z]/.test(selector) && selector.replace(/.*(?=#[^\s]*$)/, '') // strip for ie7
    }

    var $parent = selector && $(selector)

    return $parent && $parent.length ? $parent : $this.parent()
  }

  function clearMenus(e) {
    if (e && e.which === 3) return
    $(backdrop).remove()
    $(toggle).each(function () {
      var $this         = $(this)
      var $parent       = getParent($this)
      var relatedTarget = { relatedTarget: this }

      if (!$parent.hasClass('open')) return

      if (e && e.type == 'click' && /input|textarea/i.test(e.target.tagName) && $.contains($parent[0], e.target)) return

      $parent.trigger(e = $.Event('hide.bs.dropdown', relatedTarget))

      if (e.isDefaultPrevented()) return

      $this.attr('aria-expanded', 'false')
      $parent.removeClass('open').trigger($.Event('hidden.bs.dropdown', relatedTarget))
    })
  }

  Dropdown.prototype.toggle = function (e) {
    var $this = $(this)

    if ($this.is('.disabled, :disabled')) return

    var $parent  = getParent($this)
    var isActive = $parent.hasClass('open')

    clearMenus()

    if (!isActive) {
      if ('ontouchstart' in document.documentElement && !$parent.closest('.navbar-nav').length) {
        // if mobile we use a backdrop because click events don't delegate
        $(document.createElement('div'))
          .addClass('dropdown-backdrop')
          .insertAfter($(this))
          .on('click', clearMenus)
      }

      var relatedTarget = { relatedTarget: this }
      $parent.trigger(e = $.Event('show.bs.dropdown', relatedTarget))

      if (e.isDefaultPrevented()) return

      $this
        .trigger('focus')
        .attr('aria-expanded', 'true')

      $parent
        .toggleClass('open')
        .trigger($.Event('shown.bs.dropdown', relatedTarget))
    }

    return false
  }

  Dropdown.prototype.keydown = function (e) {
    if (!/(38|40|27|32)/.test(e.which) || /input|textarea/i.test(e.target.tagName)) return

    var $this = $(this)

    e.preventDefault()
    e.stopPropagation()

    if ($this.is('.disabled, :disabled')) return

    var $parent  = getParent($this)
    var isActive = $parent.hasClass('open')

    if (!isActive && e.which != 27 || isActive && e.which == 27) {
      if (e.which == 27) $parent.find(toggle).trigger('focus')
      return $this.trigger('click')
    }

    var desc = ' li:not(.disabled):visible a'
    var $items = $parent.find('.dropdown-menu' + desc)

    if (!$items.length) return

    var index = $items.index(e.target)

    if (e.which == 38 && index > 0)                 index--         // up
    if (e.which == 40 && index < $items.length - 1) index++         // down
    if (!~index)                                    index = 0

    $items.eq(index).trigger('focus')
  }


  // DROPDOWN PLUGIN DEFINITION
  // ==========================

  function Plugin(option) {
    return this.each(function () {
      var $this = $(this)
      var data  = $this.data('bs.dropdown')

      if (!data) $this.data('bs.dropdown', (data = new Dropdown(this)))
      if (typeof option == 'string') data[option].call($this)
    })
  }

  var old = $.fn.dropdown

  $.fn.dropdown             = Plugin
  $.fn.dropdown.Constructor = Dropdown


  // DROPDOWN NO CONFLICT
  // ====================

  $.fn.dropdown.noConflict = function () {
    $.fn.dropdown = old
    return this
  }


  // APPLY TO STANDARD DROPDOWN ELEMENTS
  // ===================================

  $(document)
    .on('click.bs.dropdown.data-api', clearMenus)
    .on('click.bs.dropdown.data-api', '.dropdown form', function (e) { e.stopPropagation() })
    .on('click.bs.dropdown.data-api', toggle, Dropdown.prototype.toggle)
    .on('keydown.bs.dropdown.data-api', toggle, Dropdown.prototype.keydown)
    .on('keydown.bs.dropdown.data-api', '.dropdown-menu', Dropdown.prototype.keydown)

}(jQuery);
</script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
	@media(max-width: 990px){
		
		.row {
			display: flex;
			flex-direction: column;
		}
		.col-md-5 {
			order: 2;
		}
		.col-md-7{
			order: 1;
		}
		.djape{
			order: 3
		}
	}
</style>    
</head>

<body>
	<!--
        ==================================================
        Header Section Start
        ================================================== -->
	<header id="top-bar" class="navbar-fixed-top animated-header">
		<!--<nav class="navbar-collapse " role="navigation"
			style="margin-top: 0px; margin-bottom: 0px;">

			<div class="container" id="nav-container">
				<div id="languagePanel">
					img alt="Italy flag" src="../images/flags/italy-18.png">
					<a href="index-eng.php"><img alt="English flag" src="images/flags/uk-18.png"></a>
				</div>
			</div>
		</nav> -->
		<nav class="navbar-collapse " role="navigation"
			style="margin-top: 0px; margin-bottom: 0px;">

			<div class="container" id="nav-container">
				<div id="languagePanel">
					<!-- img alt="Italy flag" src="../images/flags/italy-18.png"> -->
					<a href="index-eng.php"><img alt="English flag" src="images/flags/uk-18.png"></a>
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
						<a href="#"> <img src="images/gatehouse-logo.png"
							alt="gatehouse logo" style="height: 84px;">
						</a> 
					</div>
					<!-- /logo -->
				</div>

				<div class="collapse navbar-collapse" id="main-menu">
					<ul class="nav navbar-nav navbar-right">
						<!-- <li><a href="index.php" class="activ">Home</a></li> -->
						<li class="nav-item dropdown">
							
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >Exam <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
    							<li><a  href="CLASSIC/exam.html" class="dropdown-item"><span style="text-transform: none;">Classic</span></a></li>
   								<li><a href="exam.html" class="dropdown-item"><span style="text-transform: none;">Tie</span></a></li>
   								
    							<li><a href="cadets exam.html" class="dropdown-item"><span style="text-transform: none;">Cadets</span></a></li>
  								</ul>

							</li>
						<li><a href="support.html">Support</a></li>
						<!-- <li><a href="price_list.html">Price List</a></li> -->
						
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
	<section id="hero-area" style="padding: 20px 0 20px 0;">
		<div class="container">
			<div class="row">
				<div class="col-md-5 text-left" style="padding-top: 80px;">
					<div class="block wow fadeInUp" data-wow-delay=".3s">
					<!--	<h2 class="wow fadeInUp animated cd-headline slide"
							data-wow-delay=".4s" style="">
							<span style="font-weight: bold;">Upcoming <b style="opacity: 1;">TIE</b> Webinars:</span>
						</h2>
					
					
						<div class="col-md-6 text-left" style="padding-left: 0px;">
							<div class="block wow fadeInUp" data-wow-delay=".3s">
								<p class="wow fadeInUp animated" data-wow-delay=".6s"
									style="color: #515151; font-size: 14px; font-weight: bold;">
									<font color="#E6540E" style="font-size: 16px; font-weight: bold;">June</font><br> 
									13th June (Thursday) 2-4pm<br>
									
									<br>
		
	
								</p>
		
							</div>
						</div>
						
					
						 <div class="col-md-6 text-left" style="padding-left: 0px;">
							<div class="block wow fadeInUp" data-wow-delay=".3s">
								<p class="wow fadeInUp animated" data-wow-delay=".6s"
									style="color: #515151; font-size: 14px; font-weight: bold;">
									<font color="#E6540E" style="font-size: 16px; font-weight: bold;"></font><br> 
										<br>
										<br>
									<br>
		
	
								</p>
		
							</div>
						</div> -->
					
					
						<div class="col-md-8 text-left" style="padding-left: 0px;">
						<h2 class="wow fadeInUp animated cd-headline slide"
							data-wow-delay=".4s" style="">
							<span style="font-weight: bold;">Upcoming <b style="opacity: 1;">CLASSIC</b> Webinars:</span>
						</h2>
					</div>
						
						
						
						
						
						

						 

						

						
						

						

						<div class="col-md-6 text-left" style="padding-left: 0px;">

							<div class="block wow fadeInUp" data-wow-delay=".3s">
								<p class="wow fadeInUp animated" data-wow-delay=".6s"
									style="color: #515151; font-size: 15px; font-weight: bold;">
									<font color="#E6540E" style="font-size: 15px; font-weight: bold;">March</font><br> 
										
										25th March (Wednesday) 2-2.30pm<br>
										
										
									<br>
		
	
								</p>
		
							</div>
						</div>

						<div class="col-md-6 text-left" style="padding-left: 0px;">
							<div class="block wow fadeInUp" data-wow-delay=".3s">
								<p class="wow fadeInUp animated" data-wow-delay=".6s"
									style="color: #515151; font-size: 15px; font-weight: bold;">
									<font color="#E6540E" style="font-size: 15px; font-weight: bold;">April</font><br> 
										
										22nd April (Wednesday) 2-3.30pm<br>
										
									<br>
		
	
								</p>
		
							</div>
						</div>

						
<div class="col-md-8 text-left" style="padding-left: 0px;">
						<h2 class="wow fadeInUp animated cd-headline slide"
							data-wow-delay=".4s" style="">
							<span style="font-weight: bold;">Upcoming <b style="opacity: 1;">TIE</b> Webinars:</span>
						</h2>
					</div>

					
					
					<div class="col-md-6 text-left" style="padding-left: 0px;">	
							<div class="block wow fadeInUp" data-wow-delay=".3s">
								<p class="wow fadeInUp animated" data-wow-delay=".6s"
									style="color: #515151; font-size: 15px; font-weight: bold;">
									<font color="#E6540E" style="font-size: 16px; font-weight: bold;">February</font><br> 
									11th February (Tuesday) 2-4 pm<br>
									
									<br>
		
	
								</p>
		
							</div>
						</div>
						
					
						 
<div class="col-md-8 text-left" style="padding-left: 0px;">
						<h2 class="wow fadeInUp animated cd-headline slide"
							data-wow-delay=".4s" style="">
							<span style="font-weight: bold;">Upcoming <b style="opacity: 1;">CADETS</b> Webinars:</span>
						</h2>
					</div>

						
					


						<!-- <div class="col-md-6 text-left" style="padding-left: 0px;">	
							<div class="block wow fadeInUp" data-wow-delay=".3s">
								<p class="wow fadeInUp animated" data-wow-delay=".6s"
									style="color: #515151; font-size: 15px; font-weight: bold;">
									<font color="#E6540E" style="font-size: 16px; font-weight: bold;">December</font><br> 
										
										13th December (Friday) 2-3pm<br>
										
										
									<br>
		
	
								</p>
		
							</div>
						</div> -->

						<div class="col-md-6 text-left" style="padding-left: 0px;">
							<div class="block wow fadeInUp" data-wow-delay=".3s">
								<p class="wow fadeInUp animated" data-wow-delay=".6s"
									style="color: #515151; font-size: 15px; font-weight: bold;">
									<font color="#E6540E" style="font-size: 16px; font-weight: bold;">April</font><br> 
										
										20th April (Monday) 2-3pm<br>
										
										
									<br>
		
	
								</p>
		
							</div>
						</div>
						
					<!--	<h2 class="wow fadeInUp animated cd-headline slide"
							data-wow-delay=".4s" style="">
							<span style="font-weight: bold;">Upcoming <b style="opacity: 1;">CADETS</b> Webinars:</span>
						</h2>
						
						
						
						
						
						

						<div class="col-md-6 text-left" style="padding-left: 0px;">
							<div class="block wow fadeInUp" data-wow-delay=".3s">
								<p class="wow fadeInUp animated" data-wow-delay=".6s"
									style="color: #515151; font-size: 13px; font-weight: bold;">
									<font color="#E6540E" style="font-size: 16px; font-weight: bold;">May</font><br> 
										
										27th May (Monday) 11-12am<br>
										
									<br>
		
	
								</p>
		
							</div>
						</div> -->
					</div>
					<div class="block wow fadeInUp" data-wow-delay=".3s">
						
						<div class="col-md-6 text-left" style="padding-left: 0px; width: 100%">
							<div class="block wow fadeInUp" data-wow-delay=".3s">
								<p class="wow fadeInUp animated" data-wow-delay=".6s"
									style="color: #515151; font-size: 14px; font-weight: bold;">
									
								Regulations and forms available on <a href="support.html">Support page</a>.
	
								</p>
		
							</div>
						</div>

						
					</div>
					
						

				</div>

				<div class="col-md-7 text-right" style="padding-top: 80px;">
					<div class="block wow fadeInUp" data-wow-delay=".3s">
						<!--<a href="tie-home.php"> <img src="images/gatehouse-logo.png"
							class="" alt="gatehouse logo" style="height: 100px;"></a>-->
						<!-- Slider -->
						<section class="cd-intro" >
							<!-- <h1 class="wow fadeInUp animated cd-headline slide"
								data-wow-delay=".4s">
								<span>Gatehouse Awards</span><br> <span class="cd-words-wrapper">
									<b class="is-visible"></b>



								</span>

							</h1> -->
						</section>
						<!-- cd-intro -->
						<!-- /.slider -->
						<!--h2 class="wow fadeInUp animated" data-wow-delay=".6s" >
                                    With 10 years experience, I've occupied many roles including digital design director,<br> web designer and developer. This site showcases some of my work.
                                </h2-->
						<p class="wow fadeInUp animated" data-wow-delay=".6s"
							style="color: #666; margin-top: 10px; margin-bottom: 40px;">
							&#232; I'Ente Certificatore leader del settore, riconosciuto dall'<br>
							<font face="Century Gothic" size="4px" style="font-weight: bold;"> <i>Office of  Qualifications and Examinations Regulation, England (Qfqual)</i></font>
							e altri organismi di certificazione in tutto il mondo, comprese
							Malta, Italia e Grecia. Con la gamma di certificati in Lingua
							Inglese e qualifiche professionali a disposizione,
							collaboriamo da vicino con le scuole,  le universit&#224;,i datori di
							lavoro e i rappresentanti del mercato
							 per sviluppare e
							offrire le qualifiche innovative e creative in tutto il Regno Unito e all'estero.
							
							<br><br> Con la nostra reputazione di eccellenza nei servizi di
							assistenza clienti e la nostra <br>competenza  nello sviluppo di
							certificazioni eccitanti e di elevata qualit&#224;, <br>noi siamo in
							grado di farcela...<br>

						</p>
						<div class="block wow fadeInUp" data-wow-delay=".3s">
							 <div class="col-sm-4">
							 	<img  src="images/TIE-LOGO.png" alt="gatehouse logo" style="height: 100px;
									margin-left: 0px; margin-top: 25px; ">
							</div>
								
								
							<div class="col-sm-4"> 
								<img src="images/Classic-Logo-Trans.png"
									 alt="CLASSIC logo" style="height: 120px; margin-left: 30px;">
							
						</div>
								
							<div class="col-sm-4">	

								<img src="images/Cadets logo.png"
									 alt="CADETS logo" style="height: 80px; margin-top: 25px; margin-left: 30px; ">	
						</div>
						</div>
						</div>
					</div>
				</div>
					<div class="row djape">
						<div class="block wow fadeInUp" data-wow-delay=".3s">
							<a
							class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green" style="background: #23527c; box-shadow: 0px 0px 0px 1px #23527c;"
							data-wow-delay=".9s" href="docs/Informativa NAISA.pdf" target="_blank"
							data-section="#works">NAISA RGPD</a>
							 
						
								
						</div>
					</div>

					<div class="row djape">	
						<div class="block wow fadeInUp" data-wow-delay=".3s">	
						
							<a
							class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green"
							data-wow-delay=".9s" href="riconoscimenti.html" target="_blank"
							data-section="#works">Riconoscimenti universitari</a>
							 
						
						<a
							class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green"
							data-wow-delay=".9s" href="docs/accreditamento.pdf"
							data-section="#works">Riconoscimento MIUR</a> 
						
							
						<a
							class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green" data-wow-delay=".9s"
							href="docs/Overview_of_the_CEFR_Descriptors.pdf"
							data-section="#works" >Scala QCER</a>
						
						
						<a class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green" data-wow-delay=".9s"
							href="https://ark-gatehouseawards.org/certificate_verification" target="_blank"
							data-section="#works" >Certificate check</a>	
						<br>
					

						</div>
						
				
			

			
					
					
				</div>
				</div>
			

			
	
	</section>
	<!--/#main-slider-->

	
	
	

</body>
</html>