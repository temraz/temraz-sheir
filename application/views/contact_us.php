<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<title>Contact Us | Porto - Responsive HTML5 Template</title>
		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="Crivos.com">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Web Fonts  -->
		<link href="css-family=Open+Sans-300,400,600,700,800-Shadows+Into+Light.css" tppabs="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Libs CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css" tppabs="http://www.crivos.com/themes/porto/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.css" tppabs="http://www.crivos.com/themes/porto/css/fonts/font-awesome/css/font-awesome.css">
		<link rel="stylesheet" href="<?php echo base_url();?>css/flexslider.css" tppabs="http://www.crivos.com/themes/porto/vendor/flexslider/flexslider.css" media="screen" />
		<link rel="stylesheet" href="<?php echo base_url();?>css/jquery.fancybox.css" tppabs="http://www.crivos.com/themes/porto/vendor/fancybox/jquery.fancybox.css" media="screen" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>css/theme.css" tppabs="http://www.crivos.com/themes/porto/css/theme.css">
		<link rel="stylesheet" href="<?php echo base_url();?>css/theme-elements.css" tppabs="http://www.crivos.com/themes/porto/css/theme-elements.css">

		<!-- Responsive CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-responsive.css" tppabs="http://www.crivos.com/themes/porto/css/bootstrap-responsive.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>css/theme-responsive.css" tppabs="http://www.crivos.com/themes/porto/css/theme-responsive.css" />

		<!-- Favicons -->
		<link rel="shortcut icon" href="<?php echo base_url();?>images/favicon.ico">
		<link rel="apple-touch-icon" href="<?php echo base_url();?>images/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>images/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>images/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>images/apple-touch-icon-144x144.png">

		<!-- Head Libs -->
		<script src="<?php echo base_url();?>js/modernizr.js" ></script>

		<!--[if IE]>
			<link rel="stylesheet" href="ie.css" tppabs="http://www.crivos.com/themes/porto/css/ie.css">
		<![endif]-->

		<!--[if lte IE 8]>
			<script src="<?php echo base_url();?>images/respond.js" tppabs="http://www.crivos.com/themes/porto/vendor/respond.js"></script>
		<![endif]-->

		<!-- Facebook OpenGraph Tags -->
		<meta property="og:title" content="Porto Website Template."/>
		<meta property="og:type" content="website"/>
		<meta property="og:url" content="http://www.crivos.com/themes/porto"/>
		<meta property="og:image" content="http://www.crivos.com/themes/porto/"/>
		<meta property="og:site_name" content="Porto"/>
		<meta property="fb:app_id" content=""/> <!-- Use your own API Key. Go to http://developers.facebook.com/ for more information. -->
		<meta property="og:description" content="Porto - Responsive HTML5 Template"/>

	</head>
	<body >

		<div class="body">
			
            <?php include('header.php')?>
            
			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="span12">
								<ul class="breadcrumb">
									<li><a href="index.html" tppabs="http://www.crivos.com/themes/porto/index.html">Home</a> <span class="divider">/</span></li>
									<li class="active">Contact Us</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="span12">
								<h2>Contact Us</h2>
							</div>
						</div>
					</div>
				</section>

				<!-- Google Maps -->
				<div id="googlemaps" class="google-map hidden-phone"><iframe class="img-rounded" width="300" height="300" style="width:100% ; height:300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo base_url();?>images/http://maps.google.com.eg/maps?hl=en&amp;ie=UTF8&amp;ll=27.019984,30.882568&amp;spn=5.185879,10.821533&amp;t=m&amp;z=7&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com.eg/maps?hl=en&amp;ie=UTF8&amp;ll=27.019984,30.882568&amp;spn=5.185879,10.821533&amp;t=m&amp;z=7&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small></div>

				<div class="container">

					<div class="row">
						<div class="span6">

							<div class="alert alert-success hidden" id="contactSuccess">
								<strong>Success!</strong> Your message has been sent to us.
							</div>

							<div class="alert alert-error hidden" id="contactError">
								<strong>Oh snap!</strong> There was an error sending your message.
							</div>

							<h2 class="short"><strong>Contact</strong> Us</h2>
							<form action="" id="contactForm" type="post">
								<div class="row controls">
									<div class="span3 control-group">
										<label>Your name *</label>
										<input type="text" value="" maxlength="100" class="span3" name="name" id="name">
									</div>
									<div class="span3 control-group">
										<label>Your email address *</label>
										<input type="email" value="" maxlength="100" class="span3" name="email" id="email">
									</div>
								</div>
								<div class="row controls">
									<div class="span6 control-group">
										<label>Subject</label>
										<input type="text" value="" maxlength="100" class="span6" name="subject" id="subject">
									</div>
								</div>
								<div class="row controls">
									<div class="span6 control-group">
										<label>Message *</label>
										<textarea maxlength="5000" rows="10" class="span6" name="message" id="message"></textarea>
									</div>
								</div>
								<div class="btn-toolbar">
									<input type="submit" value="Send Message" class="btn btn-primary btn-large" data-loading-text="Loading...">
								</div>
							</form>
						</div>
						<div class="span6">

							<h4 class="pull-top">Get in <strong>touch</strong></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus.</p>

							<hr />

							<h4>The <strong>Office</strong></h4>
							<ul class="unstyled">
								<li><i class="icon-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</li>
								<li><i class="icon-phone"></i> <strong>Phone:</strong> (123) 456-7890</li>
								<li><i class="icon-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
							</ul>

							<hr />

							<h4>Business <strong>Hours</strong></h4>
							<ul class="unstyled">
								<li><i class="icon-time"></i> Monday - Friday 9am to 5pm</li>
								<li><i class="icon-time"></i> Saturday - 9am to 2pm</li>
								<li><i class="icon-time"></i> Sunday - Closed</li>
							</ul>

						</div>

					</div>

				</div>

			</div>

			<footer>
				<div class="container">
					<div class="row">
						<div class="footer-ribon">
							<span>Contact</span>
						</div>
						
						<div class="span3">
							<h4>Latest Tweet</h4>
							<div class="twitter">
								<p class="icon-twitter" ><strong style="font-family:Tahoma, Geneva, sans-serif"> Please wait...</strong></p>
							</div>
						</div>
						<div class="span4">
							<div class="contact-details">
								<h4>Contact Us</h4>
								<ul class="contact">
									<li><p><i class="icon-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, Egypt</p></li>
									<li><p><i class="icon-phone"></i> <strong>Phone:</strong> (02) xxxx-xxxxxxx</p></li>
									<li><p><i class="icon-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></p></li>
								</ul>
							</div>
						</div>
						<div class="span2">
							<h4>Follow Us</h4>
							<div class="social-icons">
								<ul class="social-icons">
									<li class="facebook"><a href="javascript:if(confirm(%27http://www.facebook.com/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.facebook.com/%27" tppabs="http://www.facebook.com/" target="_blank" data-placement="bottom" rel="tooltip" title="Facebook">Facebook</a></li>
									<li class="twitter"><a href="javascript:if(confirm(%27http://www.twitter.com/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.twitter.com/%27" tppabs="http://www.twitter.com/" target="_blank" data-placement="bottom" rel="tooltip" title="Twitter">Twitter</a></li>
									<li class="linkedin"><a href="javascript:if(confirm(%27http://www.linkedin.com/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.linkedin.com/%27" tppabs="http://www.linkedin.com/" target="_blank" data-placement="bottom" rel="tooltip" title="Linkedin">Linkedin</a></li>
								</ul>
							</div>
						</div>
                        
                        <div class="span3">
							<iframe class="img-rounded" width="300" height="300" style="width:280px ; height:280px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.eg/maps?hl=en&amp;ie=UTF8&amp;ll=27.019984,30.882568&amp;spn=5.185879,10.821533&amp;t=m&amp;z=7&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com.eg/maps?hl=en&amp;ie=UTF8&amp;ll=27.019984,30.882568&amp;spn=5.185879,10.821533&amp;t=m&amp;z=7&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>
						</div>
                        
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="span1">
								<a href="index.html"  class="logo">
									<img  src="<?php echo base_url();?>images/graylogo.png" >
								</a>
							</div>
							<div class="span7">
								<p>Time Bank © Copyright 2013 . All Rights Reserved.</p>
							</div>
							<div class="span4">
								<nav id="sub-menu">
									<ul>
										<li><a href="page-faq.html" tppabs="http://www.crivos.com/themes/porto/page-faq.html">FAQ's</a></li>
										<li><a href="sitemap.html" tppabs="http://www.crivos.com/themes/porto/sitemap.html">Sign Up</a></li>
										<li><a href="contact-us.html" tppabs="http://www.crivos.com/themes/porto/contact-us.html">Contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Libs -->
		<script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js" tppabs="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="<?php echo base_url();?>js/jquery.js"/*tpa=http://www.crivos.com/themes/porto/vendor/jquery.js*/><\/script>')</script>
		<script src="<?php echo base_url();?>js/jquery.easing.js" tppabs="http://www.crivos.com/themes/porto/vendor/jquery.easing.js"></script>
		<script src="<?php echo base_url();?>js/jquery.cookie.js" tppabs="http://www.crivos.com/themes/porto/vendor/jquery.cookie.js"></script>
		<script src="<?php echo base_url();?>js/style.switcher.js" tppabs="http://www.crivos.com/themes/porto/master/style-switcher/style.switcher.js"></script> <!-- Style Switcher -->
		<script src="<?php echo base_url();?>js/bootstrap.js" tppabs="http://www.crivos.com/themes/porto/vendor/bootstrap.js"></script>
		<script src="<?php echo base_url();?>js/selectnav.js" tppabs="http://www.crivos.com/themes/porto/vendor/selectnav.js"></script>
		<script src="<?php echo base_url();?>js/twitter.js" tppabs="http://www.crivos.com/themes/porto/vendor/twitterjs/twitter.js"></script>
		<script src="<?php echo base_url();?>js/jquery.flexslider.js" tppabs="http://www.crivos.com/themes/porto/vendor/flexslider/jquery.flexslider.js"></script>
		<script src="<?php echo base_url();?>js/jflickrfeed.js" tppabs="http://www.crivos.com/themes/porto/vendor/jflickrfeed/jflickrfeed.js"></script>
		<script src="<?php echo base_url();?>js/jquery.fancybox.js" tppabs="http://www.crivos.com/themes/porto/vendor/fancybox/jquery.fancybox.js"></script>
		<script src="<?php echo base_url();?>js/jquery.validate.js" tppabs="http://www.crivos.com/themes/porto/vendor/jquery.validate.js"></script>

		<script src="<?php echo base_url();?>js/js-sensor=false.js" tppabs="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script src="<?php echo base_url();?>js/jquery.mapmarker.js" tppabs="http://www.crivos.com/themes/porto/vendor/jquery.mapmarker.js"></script>

		<script>
			$(document).ready(function() {

				var mapMarkers = {
					"markers": [
						{
							"latitude": "48.85661",
							"longitude":"2.35222",
							"icon": "pin.png"/*tpa=http://www.crivos.com/themes/porto/img/pin.png*/
						}
					]
				};

				$("#googlemaps").mapmarker({
					zoom : 16,
					center: "48.85661, 2.35222",
					dragging:1,
					mousewheel:0,
					markers: mapMarkers,
					featureType:"all",
					visibility: "on",
					elementType:"geometry"
				});
			
			});
		</script>

		<script src="<?php echo base_url();?>js/plugins.js" tppabs="http://www.crivos.com/themes/porto/js/plugins.js"></script>

		<!-- Page Scripts -->
		<script src="<?php echo base_url();?>js/view.contact.js" tppabs="http://www.crivos.com/themes/porto/js/views/view.contact.js"></script>

		<!-- Theme Initializer -->
		<script src="<?php echo base_url();?>js/theme.js" tppabs="http://www.crivos.com/themes/porto/js/theme.js"></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
		<!--
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-XXXXX-X']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		-->
	</body>
</html>
