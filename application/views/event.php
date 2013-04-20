<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]--><head>

		<!-- Basic -->
		<meta charset="utf-8">
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

		<!-- Facebook OpenGraph Tags -->
		<meta property="og:title" content="Porto Website Template."/>
		<meta property="og:type" content="website"/>
		<meta property="og:url" content="http://www.crivos.com/themes/porto"/>
		<meta property="og:image" content="http://www.crivos.com/themes/porto/"/>
		<meta property="og:site_name" content="Porto"/>
		<meta property="fb:app_id" content=""/> <!-- Use your own API Key. Go to http://developers.facebook.com/ for more information. -->
		<meta property="og:description" content="Porto - Responsive HTML5 Template"/>

	</head>
    
	<style type="text/css">
    #event_img{width:300px; height:180px;}
    </style>
    
    
	<body >

	  <div class="body">
			<?php include('header.php')?>
            
  <?php foreach ($event_details as $row){
							$event_id = $row->id; 
							$event_name = $row->event_name ;
							$event_date = $row->event_date ;
							$event_logo = $row->event_logo ;
							$about_event = $row->about_event ;
							$facebook = $row->facebook_url;
							$twitter = $row->twitter_url;
  }
							?>
                            
                            
                                                 <?php
												 if(isset($user_event)){
												  foreach ($user_event as $row){
							$waiting = $row->wait; 
							$confirm = $row->confirm ;
												 }
												 } ?>
                                                 
			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="span12">
								<ul class="breadcrumb">
									<li><a href="<?php echo base_url();?>home/events" >Events</a> <span class="divider">/</span></li>
								
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="span12">
								<h2><?php echo $event_name ; ?></h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<h2><?php echo $event_name ; ?> Event</h2>

					<title><?php echo $event_name ; ?></title>

					<hr />
	<article class="post post-medium-image">
									<div class="row">

										<div class="span4">
											<div class="post-image">
												<div class="flexslider flexslider-center-mobile flexslider-simple" data-plugin-options='{"controlNav":false, "animation":"slide", "slideshow": false, "maxVisibleItems": 1}'>
													<ul class="slides">
														<li>
															<img class="img-rounded" src="<?php echo base_url()."images/events/".$event_logo ; ?>">
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="span8">
			
											<div class="post-content">

												<h2><?php echo $event_name ; ?> Event Detalis <span style="font-size:14px;"><i class="icon-comments" ></i> <?php echo $count_comments; ?> Comments</span></h2>
												<p style="margin-top:-30px"><?php echo $about_event ; ?></p>

											</div>
										</div>

									</div>
									<div class="row">
										<div class="span11">
											<div class="post-meta">
												<span><i class="icon-calendar"></i> <?php echo $event_date ; ?> </span>
												<span><i class="icon-facebook"></i> <a href="<?php echo $facebook ; ?>"><?php echo $event_name ; ?>'s Facebook Page</a> </span>
												<span><i class="icon-twitter"></i><a href="<?php echo $twitter ; ?>"><?php echo $event_name ; ?>'s twitter Page</a> </span>
												
                                                
                                                
                                                
                                                <?php if(($this->session->userdata('logged_in'))){
												if(isset($confirm) && $confirm == 1){ ?>
                                                <span class="label label-success pull-right">Yore Attend is confirmed</span>
													<?php }
												elseif(isset($waiting) && $waiting == 1){?>
                                <span class="label label-warning pull-right">Waiting Your Confirmation</span>
                            <?php } else { ?>
								
								<a href="<?php echo base_url()."home/attend/".$event_id;?>" class="btn  btn-primary pull-right" style="">Attend</a>
							<?php	}
												}else {
													echo "<span style=\"float:right; color:#F00\">You Must Sign In to to see Attend and Comment Option..</span>";
													}?>
												
											</div>
										</div>
									</div>
                                    <?php if($count_comments == 0 && (!$this->session->userdata('logged_in'))){?>
                                    <center><span style="color:#069">There are no Comments</span></center>
                                    <?php }?>
                                    <?php 
									if(($this->session->userdata('logged_in'))){
                                    $this->load->model('event_model');
									$user_id = $this->session->userdata('user_id');
							$user_date= $this->event_model->get_user_by_id($user_id);
							foreach ($user_date as $row){
								$name = $row->name; 
							$pic = $row->pic ;
							?>
                                    <div class="container">
                                    <div class="span3">
                                    </div>
                                    <div class="span8" >
<ul class="comments reply" >
<?php echo form_open('home/add_comment/'.$event_id); ?>
														<li>
															<div class="comment" >
																<div class="thumbnail">
																	<img class="avatar" alt="" src="<?php echo base_url();?>/images/profile/<?php echo $pic; ?>" >
																</div>
																<div class="comment-block">
																	<div class="comment-arrow"></div>
																	<span class="comment-by">
																		<strong><?php echo $name; ?></strong>
																		<span class="pull-right">
																		</span>
																	</span>
                                                                    <span><?php  echo validation_errors(); ?></span>
																	<p><textarea name="comment" class="span6" required></textarea></p>
																	<span> <button class="btn btn-small pull-right" ><i class="icon-reply"></i> Comment</button></span>
																</div>
															</div>
														</li>
                                                       <?php echo form_close();?>
                                                        </ul>
                                                        </div>
                                                        <?php 
							}
							}?>
                                                        
                                                        <?php  foreach ($comments as $row){
							$event_id = $row->event_id; 
							$user_id = $row->user_id ;
							$comment_date = $row->comment_date ;
							$comment = $row->comment ;
							
							$this->load->model('event_model');
							$user_date= $this->event_model->get_user_by_id($user_id);
							foreach ($user_date as $row){
								$name = $row->name; 
							$pic = $row->pic ;
							
							?>
                                                        </div> <div class="container">
                                    <div class="span3">
                                    </div>
                                    <div class="span8">
<ul class="comments reply">
														<li>
															<div class="comment">
																<div class="thumbnail">
																	<img class="avatar" alt="" src="<?php echo base_url();?>/images/profile/<?php echo $pic; ?>" tppabs="http://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50">
																</div>
																<div class="comment-block">
																	<div class="comment-arrow"></div>
																	<span class="comment-by">
																		<strong><?php echo $name; ?></strong>
																		<span class="pull-right">
																	
																		</span>
																	</span>
																	<p style="word-wrap:break-word"><?php echo $comment; ?></p>
																	<span class="date pull-right"><?php echo $comment_date; ?></span>
																</div>
															</div>
														</li>
                                                        </ul>
                                                        </div>
                                                        </div>
                                                        <?php }
														}?>
								</article>
				</div>

			</div>

<?php include('footer.php') ;?>
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
