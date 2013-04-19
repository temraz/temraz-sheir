<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<title>TimeBank-Portfolio</title>
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
		<link rel="stylesheet" href="<?php echo base_url();?>css/jquery.isotope.css" tppabs="http://www.crivos.com/themes/porto/vendor/isotope/jquery.isotope.css" media="screen" />

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
        <script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url();?>css/chosen.css" />
		<!-- Head Libs -->
		<script src="<?php echo base_url();?>js/modernizr.js" tppabs="http://www.crivos.com/themes/porto/vendor/modernizr.js"></script>

		<!--[if IE]>
			<link rel="stylesheet" href="ie.css" tppabs="http://www.crivos.com/themes/porto/css/ie.css">
		<![endif]-->

		<!--[if lte IE 8]>
		
		<![endif]-->

		
<style type="text/css">
.thumbnail img{width:300px; height:200px;}

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
									<li><a href="index.html" >Home</a> <span class="divider">/</span></li>
									<li class="active">Portfolio</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="span12">
								<h2>4 Columns</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<h2>Portfolio</h2>

					 <?php if (validation_errors()){ ?>
                                <div class="alert alert-error">
<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>Error! <?php  echo validation_errors(); ?></strong> 
							</div>
                                <?php } if(isset($inserted) && $inserted == 1){?>
                                <div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>Success!</strong> The users has been taged Successfuly. 
							</div>
                            <?php } ?>

					<hr />
 
					<div class="row">

						<ul class="portfolio-list sort-destination" data-sort-id="portfolio">
                        <?php if(isset($albums)){foreach($albums as $album){?>
							<li class="span3 isotope-item ">
								<div class="portfolio-item thumbnail">
								
										<img alt="" src="<?php echo base_url();?>albums/thumbs/<?php echo $album->photo_name?>"  >
										
										
							
        </div>
        	<div class="span3 control-group" style="width:200px;margin-top:5px;margin-left:0px;" >
          <?php echo form_open_multipart('admin/tag_users'); ?>
        <select data-placeholder="Who in this photo !" class="chzn-select" multiple name="tags[]"  style="width:270px" tabindex="4" required>
          <option value=""></option> 
          <?php if(isset($users)){ foreach($users as $user){?>
        <option value="<?php echo $user->id; ?>"><?php echo $user->name; ?></option> 
        
        	<?php }}?>
            </select>
            <input type="hidden" name="photo_id" value="<?php echo $album->id?>" />
             <input type="hidden" name="album_id" value="<?php echo $album->album_id?>" />
            <div class="btn-toolbar" style="margin-left:30px">
<input type="submit" value="Save" class="btn btn-primary btn-large" style="position:relative;float:left;margin-left:-30px;" data-loading-text="Loading...">
								</div>
                                
							 <?php echo form_close();?>
								</div>
                                
							</li>
                            
                            <?php }}?>
							
						</ul>

					</div>

				</div>

			</div>

			
		</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>js/chosen.jquery.js" type="text/javascript"></script>
  <script type="text/javascript"> 
    var config = {
      '.chzn-select'           : {},
      '.chzn-select-deselect'  : {allow_single_deselect:true},
      '.chzn-select-no-single' : {disable_search_threshold:10},
      '.chzn-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chzn-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>
		<!-- Libs -->
		
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
		<script src="<?php echo base_url();?>js/jquery.isotope.js" tppabs="http://www.crivos.com/themes/porto/vendor/isotope/jquery.isotope.js"></script>

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
