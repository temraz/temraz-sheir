<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<title>Profile</title>
		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="Crivos.com">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Web Fonts  -->
		<link href="css-family=Open+Sans-300,400,600,700,800-Shadows+Into+Light.css" tppabs="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		
		<link rel="stylesheet" href="<?php echo base_url();?>css/styles.css"  media="screen" />
		<!-- Libs CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css" tppabs="http://www.crivos.com/themes/porto/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.css" tppabs="http://www.crivos.com/themes/porto/css/fonts/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/upload_file.css" type="text/css" media="screen">
		<link rel="stylesheet" href="<?php echo base_url();?>css/flexslider.css" tppabs="http://www.crivos.com/themes/porto/vendor/flexslider/flexslider.css" media="screen" />
		<link rel="stylesheet" href="<?php echo base_url();?>css/jquery.fancybox.css" tppabs="http://www.crivos.com/themes/porto/vendor/fancybox/jquery.fancybox.css" media="screen" />
		

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>css/theme.css" tppabs="http://www.crivos.com/themes/porto/css/theme.css">
		<link rel="stylesheet" href="<?php echo base_url();?>css/theme-elements.css" tppabs="http://www.crivos.com/themes/porto/css/theme-elements.css">

		<!-- Current Page Styles -->
		<link rel="stylesheet" href="<?php echo base_url();?>css/theme-blog.css" tppabs="http://www.crivos.com/themes/porto/css/theme-blog.css" media="screen" />

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
		<script src="<?php echo base_url();?>js/modernizr.js" tppabs="http://www.crivos.com/themes/porto/vendor/modernizr.js"></script>

		<!--[if IE]>
			<link rel="stylesheet" href="ie.css" tppabs="http://www.crivos.com/themes/porto/css/ie.css">
		<![endif]-->

		<!--[if lte IE 8]>
			<script src="respond.js" tppabs="http://www.crivos.com/themes/porto/vendor/respond.js"></script>
		<![endif]-->

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
		<link rel="stylesheet" href="<?php echo base_url();?>css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
		<script src="<?php echo base_url();?>js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
		
                <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
                <style type="text/css">
                #valid p{color:#F00;}
			.img-polaroid img{width:70px;height:70px;}
			.img-polaroid img:hover{cursor:pointer}
			.portfolio-item img{width:300px; height:200px;}
			.portfolio-item img:hover{cursor:pointer}
			.clearfix{margin:0px;padding:0px;}
			.clearfix li{list-style:none;padding:0;margin:0px}
                </style>
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
									<li><a href="<?php echo base_url()?>home" >Home</a> <span class="divider">/</span></li>
									<li class="active">Error Pages</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="span12">
								<h2>404 - Page Not Found</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<section class="page-not-found">
						<div class="row">
							<div class="span6 offset1">
								<div class="page-not-found-main">
									<h2>404 <i class="icon-file"></i></h2>
									<p>We're sorry, but the page you were looking for doesn't exist.</p>
								</div>
							</div>
							<div class="span4">
								<h4>Here are some useful links</h4>
								<ul class="nav nav-list primary">
									<li >
								<a href="<?php echo base_url();?>home/">Home</a>
							</li>
                            
                           <?php if($this->session->userdata('logged_in')){?>
                                                         <li>
								<a href="<?php echo base_url();?>user/profile/<?php echo $this->session->userdata('user_id'); ?>" >My profile</a>
							</li>
							<?php }?>
			    
                                                            <?php if( ! $this->session->userdata('logged_in')){?>
                                                         <li>
								<a href="#" >Sign Up</a>
							</li>
							<?php }?>
							 <?php if( ! $this->session->userdata('logged_in')){?>
                                                         <li>
								<a href="#" >Log In</a>
							</li>
							<?php }?>
                            
                            <li>
								<a href="<?php echo base_url();?>home/portfolio" >Portfolio</a>
							</li>
                                                        
                                                        
                            <li>
                                <a href="<?php echo base_url();?>home/events" >events</a>
                            </li>
							 
							 <li>
								<a href="#" >About Us</a>
							</li>
                               <li>
								<a href="<?php echo base_url();?>home/contact_us" >Contact Us</a>
							</li>
                            <?php if( $this->session->userdata('logged_in')){?>
                                                         <li>
								<a href="<?php echo base_url();?>home/logout" >Log Out</a>
							</li>
							<?php }?>
								</ul>
							</div>
						</div>
					</section>

				</div>

			</div>

				
	
</div>



	<!--jQuery-->
	
	<script src="<?php echo base_url();?>js/jquery.reveal.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			  // Button which will activate our modal
			   	$('#modal').reveal({ // The item which will be opened with reveal
				  	animation: 'fade',                   // fade, fadeAndPop, none
					animationspeed: 600,                       // how fast animtions are
					closeonbackgroundclick: true,              // if you click background will modal close?
					dismissmodalclass: 'close'    // the class of a button or element that will close an open modal
				});
			return false;
			});
		
	</script>

			</div>

	<?php include('footer.php') ;?>
		</div>

 <script type="text/javascript" charset="utf-8">
			$(document).ready(function(){
				$("area[rel^='prettyPhoto']").prettyPhoto();
				
				$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',theme:'pp_default',slideshow:1000000, autoplay_slideshow: true});
				$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
		
				$("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
					custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
					changepicturecallback: function(){ initialize(); }
				});

				$("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
					custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
					changepicturecallback: function(){ _bsap.exec(); }
				});
			});
			</script>
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

		<script src="<?php echo base_url();?>js/plugins.js" tppabs="http://www.crivos.com/themes/porto/js/plugins.js"></script>

		<!-- Page Scripts -->

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
