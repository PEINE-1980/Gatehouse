<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" type="image/png" href="../images/favicon.png">
        <title>News </title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <!-- Ionicons Fonts Css -->
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
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.js"></script>
        
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
        <!-- modernizr js -->
        <!-- <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        jquery
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        owl carouserl js
        <script src="js/owl.carousel.min.js"></script>
        bootstrap js

        
        wow js
        <script src="js/wow.min.js"></script>
        slider js
        <script src="js/slider.js"></script>
        <script src="js/jquery.fancybox.js"></script>
        template main js
        <script src="js/main.js"></script> -->
    </head>
    <body>
        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <header id="top-bar" class="navbar-fixed-top animated-header">
        	 <nav class="navbar-collapse " role="navigation" style="margin-top: 0px; margin-bottom: 0px;">
                    
	            <div class="container" id="nav-container">
	                
	                <!-- main menu -->
	               
	                    <div class="navbar-header">
		                    <!-- responsive nav button -->
		                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu">
			                    <span class="sr-only">Toggle navigation</span>
			                    <span class="icon-bar"></span>
			                    <span class="icon-bar"></span> 
			                    <span class="icon-bar"></span>
		                    </button>
		                    <!-- /responsive nav button -->
		                    
		                    <!-- logo -->
		                    <div class="navbar-brand">
		                      <a href="../index.php"> <img src="../images/gatehouse-logo.png"
								alt="gatehouse logo" style="height: 84px;">
							<a href="index.php"> <img src="../images/Classic-Logo-Trans.png"
								alt="Classic logo" style="height: 84px;">
						</a> 
		                    </div>
		                    <!-- /logo -->
		                </div>
	                    
	                    <div class="collapse navbar-collapse" id="main-menu">
	                        <ul class="nav navbar-nav navbar-right">
	                            <li><a href="exam.html">Exam</a></li>
	                            <li><a href="support.html">Support</a></li>
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
            <section id="about">
                <div class="container">
                	<div class="row">
                    	<h2 class="wow fadeInUp animated" data-wow-delay=".6s" >
	                                    Upcoming CLASSIC Webinars: 
	                                </h2>
	                   
                        
                        <div class="col-md-4 text-left">
	                        <div class="block wow fadeInUp" data-wow-delay=".3s">
                                  <p class="wow fadeInUp animated" data-wow-delay=".6s" style="color: #666;">								
									
									---
                                </p>
		                                
                            </div>
                        </div>
                        
                        <div class="col-md-4 text-left">
	                        <div class="block wow fadeInUp" data-wow-delay=".3s">
                                  <p class="wow fadeInUp animated" data-wow-delay=".6s" style="color: #666;">								
									
									
                                </p>
		                                
                            </div>
                        </div>
                        
                        
                         <div class="col-md-4 text-left">
                         	<div class="block wow fadeInUp" data-wow-delay=".3s">
                                  <p class="wow fadeInUp animated" data-wow-delay=".6s" style="color: #666;">								
									<br>
									
                                </p>
		                                
                            </div>
                        </div>
                        <span>Regulations and forms available on Support page. </span><br>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                                <h2>
                                Subscribe to News
                                </h2>
                                <p>
                                    LA NOSTRA NEWSLETTER  TI PERMETTERà DI RESTARE AGGIORNATO SULLE INIZIATIVE DIDATTICHE E CULTURALI PROPOSTE DA TIE
                                </p>
                                   <div style="color: #E60000; font-weight: bold; padding-top: 15px;" id="popup"></div>                                           
                                <div class="contact-form">
                                <form id="contact-form" onsubmit="return false;" action="" method="post">
                                                                                                
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                        <input type="email" placeholder="Email" class="form-control" name="email" id="email" >
                                    </div>
                                    
                                   <p style="font-size:10px; line-height: 12px;">FACENDO CLICK SU ISCRIVIMI DICHIARI DI AVERE LETTO E DI ACCETTARE L'INFORMATIVA PRIVACY: ART.13 D.L. 30/6/2003 N.196 RECANTE IL CODICE DELLA PRIVACY</p>
                                    
                                    <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                        <input type="submit" id="contact-submit" class="btn btn-default btn-send" value="Iscrivimi">
                                    </div>                      
                                    
                                </form>
                            </div>
                            </div>
                            
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                                <img src="../images/news.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!-- /#about -->
            
                            
            <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
            <section id="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section> -->
            <!--
            ==================================================
            Footer Section Start
            ================================================== -->
            <footer id="footer">
                <div class="container">
                    <div class="col-md-8">
                        <p class="copyright">Copyright: <span>2016</span></p>
                    </div>
                   
                </div>
            </footer> <!-- /#footer -->
                
        </body>
    </html>