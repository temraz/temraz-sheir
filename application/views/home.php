<?php include('all_governorates.php'); ?>
<?php include('all_jobs.php'); ?>
<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<title>Time Bank</title>
        <style>
        .control-group {width:100%}
		#valid p{color:#F00}
        </style>
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

		<!-- Current Page Styles -->
		<link rel="stylesheet" href="<?php echo base_url();?>css/settings.css" tppabs="http://www.crivos.com/themes/porto/vendor/revolution-slider/css/settings.css" media="screen" />
		<link rel="stylesheet" href="<?php echo base_url();?>css/captions.css" tppabs="http://www.crivos.com/themes/porto/vendor/revolution-slider/css/captions.css" media="screen" />
		<link rel="stylesheet" href="<?php echo base_url();?>css/component.css" tppabs="http://www.crivos.com/themes/porto/vendor/circle-flip-slideshow/css/component.css" media="screen" />

		<!-- Favicons -->
		<link rel="shortcut icon" href="<?php echo base_url();?>imgages/favicon.ico">
		<link rel="apple-touch-icon" href="<?php echo base_url();?>imgages/img/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>imgages/img/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>imgages/img/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>imgages/img/apple-touch-icon-144x144.png">

		<!-- Head Libs -->
		<script src="<?php echo base_url();?>js/modernizr.js" tppabs="http://www.crivos.com/themes/porto/vendor/modernizr.js"></script>

		<!--[if IE]>
			<link rel="stylesheet" href="ie.css" tppabs="http://www.crivos.com/themes/porto/css/ie.css">
		<![endif]-->

		<!--[if lte IE 8]>
			<script src="<?php echo base_url();?>js/respond.js" tppabs="http://www.crivos.com/themes/porto/vendor/respond.js"></script>
		<![endif]-->

	<style type="text/css">
    #pic{width:80px;height:80px;}
    </style>
	</head>
	<body >

		<div class="body">
			
            <?php include('header.php')?>
			
			<div role="main" class="main">
				<div id="content" class="content full">

					<div class="slider-container">
						<div class="slider" id="revolutionSlider">
							<ul>
								<li data-transition="fade" data-slotamount="10" data-masterspeed="300">
									<img src="<?php echo base_url();?>images/slide-bg.jpg" data-fullwidthcentering="on" alt="">

										<div class="caption sft stb visible-desktop"
											 data-x="42"
											 data-y="180"
											 data-speed="300"
											 data-start="1000"
											 data-easing="easeOutExpo"><img src="<?php echo base_url();?>images/slide-title-border.png" tppabs="http://www.crivos.com/themes/porto/img/slides/slide-title-border.png" alt=""></div>

										<div class="caption top-label lfl stl"
											 data-x="92"
											 data-y="180"
											 data-speed="300"
											 data-start="500"
											 data-easing="easeOutExpo">DO YOU WANT TO EXPLOIT</div>

										<div class="caption sft stb visible-desktop"
											 data-x="420"
											 data-y="180"
											 data-speed="300"
											 data-start="1000"
											 data-easing="easeOutExpo"><img src="<?php echo base_url();?>images/slide-title-border.png" tppabs="http://www.crivos.com/themes/porto/img/slides/slide-title-border.png" alt=""></div>

										<div class="caption main-label sft stb"
											 data-x="0"
											 data-y="230"
											 data-speed="300"
											 data-start="1500"
											 data-easing="easeOutExpo">YOUR FREE TIME?</div>

										<div class="caption bottom-label sft stb"
											 data-x="50"
											 data-y="280"
											 data-speed="500"
											 data-start="2000"
											 data-easing="easeOutExpo">IN HELPING PEOPLE BY YOUR KNOWLDEGE .</div>
                                             
                                             <div class="caption bottom-label sft stb"
											 data-x="600"
											 data-y="30"
											 data-speed="500"
											 data-start="2000"
											 data-easing="easeOutExpo"><img src="<?php echo base_url();?>images/logo-pic.png" ></div>
                                             </li></ul>
									</div>
									</div>
								</div>
							</div>
					</div>

					<div class="container">

						<div class="row center">
							<div class="span12" style="padding-top:20px;">
								<h2 class="short">Time Bank is a <strong class="inverted">Share yourdfdfdff  </strong> Community for time volunteers.</h2>
								<p class="featured lead">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo. vamus suscipit molestie vestibulum.
								</p>
							</div>
						</div>

					</div>
                    
                    <div class="container" style="margin-bottom:80px;">
                    
                    <div class="row">
						<div class="span9">
							<div class="blog-posts">

								<article class="post post-large-image" style="margin-top:15px;height:350px;">
									<div class="post-image" >
										<div class="flexslider flexslider-center-mobile flexslider-simple" data-plugin-options='{"controlNav":true, "animation":"slide", "slideshow": true, "maxVisibleItems": 1}'>
											<ul class="slides">
												<li>
													<img class="img-rounded" src="<?php echo base_url();?>images/1.jpg"  alt="">
												</li>
												<li>
													<img class="img-rounded" src="<?php echo base_url();?>images/2.jpg"  alt="">
												</li>
												<li>
													<img class="img-rounded" src="<?php echo base_url();?>images/3.jpg"  alt="">
												</li>
											</ul>
										</div>
									</div>
			
								
			
									<div class="post-content" style=" margin-top:-30px">
										<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>

									
									</div>
								</article>
                                </div></div>
                                
                                <div class="span3" style="float:right">
							<aside class="sidebar">
								<h2>Log In</h2>
								<hr />
                                <?php echo form_open('home/login_validation'); ?>
                                <?php if(isset($login)){?>
                                <div id="valid" style="color:#F00">
                                <?php  echo validation_errors(); ?>
                                </div>
                                <?php }?>
								<div class="row controls" id="contactForm">
									<div class="span3 control-group">
										<label>Your Email *</label>
										<input type="email" value="" maxlength="100" class="span3" name="email" id="email" required>
									</div>
									<div class="span3 control-group">
										<label>Password *</label>
										<input type="password" value="" maxlength="100" class="span3" name="password" id="password" required>
									</div>
								</div>
								
								<div class="btn-toolbar">
									<input type="submit" value="Login" class="btn btn-primary btn-large" data-loading-text="Loading...">
								</div>
							 <?php echo form_close();?>
                            </aside> </div></div>
                            </div>

					<div class="home-concept" >
						<div class="container">

							<div class="row center">
								<span class="sun"></span>
								<span class="cloud"></span>
								<div class="span2 offset1">
									<div class="process-image">
										<img src="<?php echo base_url();?>images/home-concept-item-1.png"  alt="" />
										<strong>Strategy</strong>
									</div>
								</div>
								<div class="span2">
									<div class="process-image">
										<img src="<?php echo base_url();?>images/home-concept-item-2.png"  alt="" />
										<strong>Planning</strong>
									</div>
								</div>
								<div class="span2">
									<div class="process-image">
										<img src="<?php echo base_url();?>images/home-concept-item-3.png"  alt="" />
										<strong>Build</strong>
									</div>
								</div>
								<div class="span4 offset1">
                            <div class="project-image">
                                <div id="fcSlideshow" class="fc-slideshow">
                                    <ul class="fc-slides">
                                        <li><a href="portfolio-single-project.html" ><img src="<?php echo base_url();?>images/project-home-1.jpg" /></a></li>
                                        <li><a href="portfolio-single-project.html" ><img src="<?php echo base_url();?>images/project-home-2.jpg"  /></a></li>
                                    </ul>
                                </div>
                                <strong class="our-work">Our Work</strong>
                            </div>
								</div>
							</div>

							<hr class="tall" />

						</div>
					</div>

					<div class="container">
                    <div class="row">
                    <div class="span3" style="width:40% ;  padding-top:0">
                    <h1> Demo Video</h1>
                    <hr>
							<a class="thumbnail" href="#">
										<img  tppabs="http://www.crivos.com/themes/porto/holder.js/260x180" src="<?php echo base_url();?>images/video.jpg">
									</a>
                                    </div>
						
                        <div class="span6" style="width:50%;float:right">
                        <h1> News Feed</h1>
                        <hr>
						<div class="tabs">
								<ul class="nav nav-tabs">
									<li class="active"><a href="#popularPosts" data-toggle="tab"><i class="icon-star"></i> Popular</a></li>
									<li><a href="#recentPosts" data-toggle="tab">Recent</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="popularPosts">
										<ul class="simple-post-list">
											<li>
												<div class="post-image">
													<div class="thumbnail">
														<a href="#" tppabs="http://www.crivos.com/themes/porto/blog-single.html">
															<img src="<?php echo base_url();?>images/blog-thumb-1.jpg" tppabs="http://www.crivos.com/themes/porto/img/blog/blog-thumb-1.jpg" alt="">
														</a>
													</div>
												</div>
												<div class="post-info">
													<a href="#" tppabs="http://www.crivos.com/themes/porto/blog-single.html">Nullam Vitae Nibh Un Odiosters</a>
													<div class="post-meta">
															Jan 10, 2013
													</div>
												</div>
											</li>
											<li>
												<div class="post-image">
													<div class="thumbnail">
														<a href="#" tppabs="http://www.crivos.com/themes/porto/blog-single.html">
															<img src="<?php echo base_url();?>images/blog-thumb-2.jpg" tppabs="http://www.crivos.com/themes/porto/img/blog/blog-thumb-2.jpg" alt="">
														</a>
													</div>
												</div>
												<div class="post-info">
													<a href="#" tppabs="http://www.crivos.com/themes/porto/blog-single.html">Vitae Nibh Un Odiosters</a>
													<div class="post-meta">
															Jan 10, 2013
													</div>
												</div>
											</li>
											<li>
												<div class="post-image">
													<div class="thumbnail">
														<a href="#" tppabs="http://www.crivos.com/themes/porto/blog-single.html">
															<img src="<?php echo base_url();?>images/blog-thumb-3.jpg" tppabs="http://www.crivos.com/themes/porto/img/blog/blog-thumb-3.jpg" alt="">
														</a>
													</div>
												</div>
												<div class="post-info">
													<a href="#" tppabs="http://www.crivos.com/themes/porto/blog-single.html">Odiosters Nullam Vitae</a>
													<div class="post-meta">
															Jan 10, 2013
													</div>
												</div>
											</li>
										</ul>
									</div>
									<div class="tab-pane" id="recentPosts">
										<ul class="simple-post-list">
											<li>
												<div class="post-image">
													<div class="thumbnail">
														<a href="#" tppabs="http://www.crivos.com/themes/porto/blog-single.html">
															<img src="<?php echo base_url();?>images/blog-thumb-2.jpg" tppabs="http://www.crivos.com/themes/porto/img/blog/blog-thumb-2.jpg" alt="">
														</a>
													</div>
												</div>
												<div class="post-info">
													<a href="#" tppabs="http://www.crivos.com/themes/porto/blog-single.html">Vitae Nibh Un Odiosters</a>
													<div class="post-meta">
															Jan 10, 2013
													</div>
												</div>
											</li>
											<li>
												<div class="post-image">
													<div class="thumbnail">
														<a href="#" tppabs="http://www.crivos.com/themes/porto/blog-single.html">
															<img src="<?php echo base_url();?>images/blog-thumb-3.jpg" tppabs="http://www.crivos.com/themes/porto/img/blog/blog-thumb-3.jpg" alt="">
														</a>
													</div>
												</div>
												<div class="post-info">
													<a href="#" tppabs="http://www.crivos.com/themes/porto/blog-single.html">Odiosters Nullam Vitae</a>
													<div class="post-meta">
															Jan 10, 2013
													</div>
												</div>
											</li>
											<li>
												<div class="post-image">
													<div class="thumbnail">
														<a href="#" tppabs="http://www.crivos.com/themes/porto/blog-single.html">
															<img src="<?php echo base_url();?>images/blog-thumb-1.jpg" tppabs="http://www.crivos.com/themes/porto/img/blog/blog-thumb-1.jpg" alt="">
														</a>
													</div>
												</div>
												<div class="post-info">
													<a href="#" tppabs="http://www.crivos.com/themes/porto/blog-single.html">Nullam Vitae Nibh Un Odiosters</a>
													<div class="post-meta">
															Jan 10, 2013
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>

						</div>
								
						</div>		</div>
                        
                        <div class="container">
                        <div class="row">
                        
                        <div class="span3" style="width:30% ;float:left; ">
                        	
                        <h1 style="margin-bottom:54px;"> Effective Members</h1>
                        <hr >
                        <div class="tabs" style="margin-top:-25px;">
								<div class="tab-content">
						
										<ul class="simple-post-list">
                                        <?php if(isset($active_users)){foreach($active_users as $active_user){?>
											<li style="height:90px">
												<div class="post-image" >
													<div class="thumbnail">
														<a href="<?php echo base_url();?>user/profile/<?php echo $active_user->id?>" >
															<img id="pic" src="<?php echo base_url();?>images/profile/<?php echo $active_user->pic?>"  alt="">
														</a>
													</div>
												</div>
                                                
												<div class="post-info">
													<a href="<?php echo base_url();?>user/profile/<?php echo $active_user->id?>"><?php echo $active_user->name?></a>
                                                    </div>
													<div id="star" style="float:right ; margin-right:30px" > 
                                                    <?php if(isset($active_user->rate)){ ?>
                                                     <?php if($active_user->rate >= 200 && $active_user->rate < 400){ ?>
														<i class="icon-star"></i>
                                                         <?php }elseif($active_user->rate >= 400 && $active_user->rate < 600 ){?>
                                                         <i class="icon-star"></i><i class="icon-star"></i>
                                                        <?php }elseif($active_user->rate >= 600 && $active_user->rate < 800){?> 
                                                         <i class="icon-star"></i><i class="icon-star"></i> <i class="icon-star"></i>
                                                        <?php }elseif($active_user->rate >= 800 && $active_user->rate < 1000){?> 
                                                         <i class="icon-star"></i><i class="icon-star"></i> <i class="icon-star"></i><i class="icon-star"></i>
                                                        <?php }elseif($active_user->rate >800){?> 
                                                         <i class="icon-star"></i><i class="icon-star"></i> <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i>
                                                        <?php }else{?>
                                                        
                                                         <i class="icon-star-half"></i>
                                                        <?php }}?>
													
												</div>
                                                <div class="post-meta">
															<?php echo $active_user->job?>
                                                        </div>
                                                    <div class="post-meta">
														<?php echo $active_user->birthdate?> years
													</div>
											</li>
                                            <?php }}?>
										</ul>
								
						</div>
                        </div>
                        </div>
                        
                                                               
       <div class="span9" style="width:50%;float:right">
							<aside class="sidebar">
                            
                                    
								<h2>Sign UP</h2>
<div id="valid" style="color:#F00">
<?php if(isset($regist)){  echo validation_errors() ; } ?>
</div>

								<hr class="tall" />
                                
                                 <?php echo form_open('home/sign_user_validation');  ?>
								<div class="row controls" id="contactForm">
									<div class="span3 control-group">
										<label>Username *</label>
										<input type="text" value="<?php echo $this->input->post('username') ?>" maxlength="20" class="span3" name="username" id="username" required>
									</div>
									<div class="span3 control-group">
										<label>Password *</label>
										<input type="password" value="" maxlength="100" class="span3" name="password" id="password" required>
									</div>
                                    <div class="span3 control-group">
										<label>Repeat Password *</label>
										<input type="password" value="" maxlength="100" class="span3" name="r_password" id="password" required>
									</div>
                                    <div class="span3 control-group">
										<label>Email *</label>
										<input type="email" value="<?php echo $this->input->post('email') ?>" maxlength="150" class="span3" name="email" id="email" required>
									</div>
                                    <div class="span3 control-group">
										<label>Phone *</label>
										<input type="tel" value="<?php echo $this->input->post('phone') ?>" maxlength="10" class="span3" name="phone" id="phone" required>
									</div>
                                    <div class="span3 control-group">
										<label>Mobile Number *</label>
										<input type="text" value="<?php echo $this->input->post('mobile') ?>" maxlength="11" class="span3" name="mobile" id="mobile" required>
									</div>
                                   
                                    <div class="span3 control-group">
										<label>City *</label>
										 <select name="city" size="1" class="span3" required>
											<option value="" >Select</option>
   <?php for($i=0;$i< count($governorates_list);$i++) {
  echo " <option value=\"$governorates_list[$i]\"";
    echo ">$governorates_list[$i]</option>";
   } ?> 
   </select>  
									</div>
                                    <div class="span3 control-group">
										<label>Profession *</label>
										 <select name="Profession" size="1" class="span3" required>
											<option value="" >Select</option>
   <?php for($i=0;$i< count($jobs_list);$i++) {
  echo " <option value=\"$jobs_list[$i]\"";
    echo ">$jobs_list[$i]</option>";
   } ?> 
   </select>
									</div>
                                    <div class="span3 control-group">
										<label>Job Field *</label>
										<input type="text" value="<?php echo $this->input->post('field') ?>" maxlength="25" class="span3" name="field"  required>
									</div>
                                     <div class="span3 control-group">
										<label>Age *</label>
										<input  type="text" value="<?php echo $this->input->post('birthdate') ?>" maxlength="10" class="span3" name="birthdate" id="date" required>
									</div>
                                    
                                    <div class="span6 control-group">
										<label>Hobbies *</label>
										<textarea maxlength="300" required minlength="60" rows="5" class="span6" name="hobbies" id="message"><?php echo $this->input->post('hobbies') ?></textarea>
									</div>
								</div>
								
								<div class="btn-toolbar">
									<input type="submit" value="Sign Up" class="btn btn-primary btn-large" data-loading-text="Loading...">
								</div>
						  <?php echo form_close();?>
                            </aside> </div>
                                               
                        </div>
                        </div>
                        </div>
                        

						<hr class="tall" />
							
                            <div class="container">
						<div class="row center" style="margin-left:40px;">
							<div class="span12">
								<h2 class="short">There are many companies sponse this project...</h2>
								<h4 class="lead tall">1,100 volunteers introduce their time. in Time Bank.</h4>
							</div>
						</div>
						<div class="row center" >
							<div class="flexslider unstyled" data-plugin-options='{"directionNav":false, "animation":"slide", "slideshow": false, "maxVisibleItems": 6}'>
								<ul class="slides" >
									<li>
										<div class="span2">
											<img class="mobile-max-width small" src="<?php echo base_url();?>images/logo-client-1.jpg" tppabs="http://www.crivos.com/themes/porto/img/logo-client-1.jpg" alt="">
										</div>
									</li>
									<li>
										<div class="span2">
											<img class="mobile-max-width small" src="<?php echo base_url();?>images/logo-client-2.jpg" tppabs="http://www.crivos.com/themes/porto/img/logo-client-2.jpg" alt="">
										</div>
									</li>
									<li>
										<div class="span2">
											<img class="mobile-max-width small" src="<?php echo base_url();?>images/logo-client-3.jpg" tppabs="http://www.crivos.com/themes/porto/img/logo-client-3.jpg" alt="">
										</div>
									</li>
									<li>
										<div class="span2">
											<img class="mobile-max-width small" src="<?php echo base_url();?>images/logo-client-4.jpg" tppabs="http://www.crivos.com/themes/porto/img/logo-client-4.jpg" alt="">
										</div>
									</li>
									<li>
										<div class="span2">
											<img class="mobile-max-width small" src="<?php echo base_url();?>images/logo-client-5.jpg" tppabs="http://www.crivos.com/themes/porto/img/logo-client-5.jpg" alt="">
										</div>
									</li>
									<li>
										<div class="span2">
											<img class="mobile-max-width small" src="<?php echo base_url();?>images/logo-client-6.jpg" tppabs="http://www.crivos.com/themes/porto/img/logo-client-6.jpg" alt="">
										</div>
									</li>
									<li>
										<div class="span2">
											<img class="mobile-max-width small" src="<?php echo base_url();?>images/logo-client-4.jpg" tppabs="http://www.crivos.com/themes/porto/img/logo-client-4.jpg" alt="">
										</div>
									</li>
									<li>
										<div class="span2">
											<img class="mobile-max-width small" src="<?php echo base_url();?>images/logo-client-2.jpg" tppabs="http://www.crivos.com/themes/porto/img/logo-client-2.jpg" alt="">
										</div>
                                        <div class="span2">
											<img class="mobile-max-width small" src="<?php echo base_url();?>images/logo-client-2.jpg" tppabs="http://www.crivos.com/themes/porto/img/logo-client-2.jpg" alt="">
										</div><div class="span2">
											<img class="mobile-max-width small" src="<?php echo base_url();?>images/logo-client-2.jpg" tppabs="http://www.crivos.com/themes/porto/img/logo-client-2.jpg" alt="">
										</div>
                                        <div class="span2">
											<img class="mobile-max-width small" src="<?php echo base_url();?>images/logo-client-2.jpg" tppabs="http://www.crivos.com/themes/porto/img/logo-client-2.jpg" alt="">
										</div><div class="span2">
											<img class="mobile-max-width small" src="<?php echo base_url();?>images/logo-client-2.jpg" tppabs="http://www.crivos.com/themes/porto/img/logo-client-2.jpg" alt="">
										</div>
									</li>
								</ul>
							</div>
						</div>

					</div>
                    </div>

					<div class="map-section">
						<section class="featured footer map">
							<div class="container">
								<div class="row">
									<div class="span6">
										<div class="recent-posts">
											<h2>Latest <strong>Time Bank </strong><strong style="color:#06C">Events</strong></h2>
											<div class="row">
												<div class="flexslider unstyled" data-plugin-options='{"directionNav":false, "animation":"slide"}'>
													<ul class="slides">
														<li>
															<div class="span3">
																<article>
																	<div class="date">
																		<span class="day">15</span>
																		<span class="month">Jan</span>
																	</div>
																	<h4><a href="blog-post.html" tppabs="http://www.crivos.com/themes/porto/blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. <a href="javascript:if(confirm(%27http://www.crivos.com/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://www.crivos.com/%27" tppabs="http://www.crivos.com/" class="read-more">read more <i class="icon-angle-right"></i></a></p>
																</article>
															</div>
															<div class="span3">
																<article>
																	<div class="date">
																		<span class="day">15</span>
																		<span class="month">Jan</span>
																	</div>
																	<h4><a href="blog-post.html" tppabs="http://www.crivos.com/themes/porto/blog-post.html">Lorem ipsum dolor</a></h4>
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. <a href="javascript:if(confirm(%27http://www.crivos.com/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://www.crivos.com/%27" tppabs="http://www.crivos.com/" class="read-more">read more <i class="icon-angle-right"></i></a></p>
																</article>
															</div>
														</li>
														<li>
															<div class="span3">
																<article>
																	<div class="date">
																		<span class="day">12</span>
																		<span class="month">Jan</span>
																	</div>
																	<h4><a href="blog-post.html" tppabs="http://www.crivos.com/themes/porto/blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. <a href="javascript:if(confirm(%27http://www.crivos.com/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://www.crivos.com/%27" tppabs="http://www.crivos.com/" class="read-more">read more <i class="icon-angle-right"></i></a></p>
																</article>
															</div>
															<div class="span3">
																<article>
																	<div class="date">
																		<span class="day">11</span>
																		<span class="month">Jan</span>
																	</div>
																	<h4><a href="blog-post.html" tppabs="http://www.crivos.com/themes/porto/blog-post.html">Lorem ipsum dolor</a></h4>
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="javascript:if(confirm(%27http://www.crivos.com/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://www.crivos.com/%27" tppabs="http://www.crivos.com/" class="read-more">read more <i class="icon-angle-right"></i></a></p>
																</article>
															</div>
														</li>
														<li>
															<div class="span3">
																<article>
																	<div class="date">
																		<span class="day">15</span>
																		<span class="month">Jan</span>
																	</div>
																	<h4><a href="blog-post.html" tppabs="http://www.crivos.com/themes/porto/blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. <a href="javascript:if(confirm(%27http://www.crivos.com/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://www.crivos.com/%27" tppabs="http://www.crivos.com/" class="read-more">read more <i class="icon-angle-right"></i></a></p>
																</article>
															</div>
															<div class="span3">
																<article>
																	<div class="date">
																		<span class="day">15</span>
																		<span class="month">Jan</span>
																	</div>
																	<h4><a href="blog-post.html" tppabs="http://www.crivos.com/themes/porto/blog-post.html">Lorem ipsum dolor</a></h4>
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. <a href="javascript:if(confirm(%27http://www.crivos.com/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://www.crivos.com/%27" tppabs="http://www.crivos.com/" class="read-more">read more <i class="icon-angle-right"></i></a></p>
																</article>
															</div>
														</li>
													</ul>
												</div>
												<div class="row">
													<div class="span6">
														<a class="btn btn-flat btn-mini btn-primary pull-right pull-bottom-phone" href="<?php echo base_url();?>home/events">View All Events <i class="icon-arrow-right"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="span6">
										<h2>What <strong style="color:#09c">Volunteers</strong> Say</h2>
										<div class="row">
											<div class="flexslider flexslider-top-title unstyled" data-plugin-options='{"controlNav":false, "slideshow": false, "animationLoop": true, "animation":"slide"}'>
												<ul class="slides">
													<li>
														<div class="span6">
															<blockquote class="testimonial">
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.  Donec hendrerit vehicula est, in consequat.  Donec hendrerit vehicula est, in consequat.</p>
															</blockquote>
															<div class="testimonial-arrow-down"></div>
															<div class="testimonial-author">
																<div class="thumbnail thumbnail-small">
																	<img src="<?php echo base_url();?>images/sheir.jpg" tppabs="http://www.crivos.com/themes/porto/img/clients/client-1.jpg" alt="">
																</div>
																<p><strong>Mohamed Samy</strong><span>Web Developer</span></p>
															</div>
														</div>
													</li>
													<li>
														<div class="span6">
															<blockquote class="testimonial">
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
															</blockquote>
															<div class="testimonial-arrow-down"></div>
															<div class="testimonial-author">
																<div class="thumbnail thumbnail-small">
																	<img src="<?php echo base_url();?>images/temraz.jpg" tppabs="http://www.crivos.com/themes/porto/img/clients/client-1.jpg" alt="">
																</div>
																<p><strong>Mohamed Temraz</strong><span>Web Developer</span></p>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
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
		<script src="<?php echo base_url();?>js/jquery.themepunch.plugins.js" tppabs="http://www.crivos.com/themes/porto/vendor/revolution-slider/js/jquery.themepunch.plugins.js"></script>
		<script src="<?php echo base_url();?>js/jquery.themepunch.revolution.js" tppabs="http://www.crivos.com/themes/porto/vendor/revolution-slider/js/jquery.themepunch.revolution.js"></script>
		<script src="<?php echo base_url();?>js/jquery.flexslider.js" tppabs="http://www.crivos.com/themes/porto/vendor/flexslider/jquery.flexslider.js"></script>
		<script src="<?php echo base_url();?>js/jquery.flipshow.js" tppabs="http://www.crivos.com/themes/porto/vendor/circle-flip-slideshow/js/jquery.flipshow.js"></script>
		<script src="<?php echo base_url();?>js/jquery.fancybox.js" tppabs="http://www.crivos.com/themes/porto/vendor/fancybox/jquery.fancybox.js"></script>

		<script src="<?php echo base_url();?>js/plugins.js" tppabs="http://www.crivos.com/themes/porto/js/plugins.js"></script>

		<!-- Current Page Scripts -->
		<script src="<?php echo base_url();?>js/view.home.js" tppabs="http://www.crivos.com/themes/porto/js/views/view.home.js"></script>

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
