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
<?php  if(($this->session->userdata('logged_in'))){?>
				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="span12">
								<ul class="breadcrumb">
									<li><a href="index.html" tppabs="http://www.crivos.com/themes/porto/index.html">Home</a> <span class="divider">/</span></li>
									<li class="active">Profile</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="span12">
								<?php 
						$current_id = $this->session->userdata('user_id');
						$current_date= $this->user_model->get_user_by_id($current_id);
							foreach ($current_date as $row){
								$current_name = $row->name; 
							$current_pic = $row->pic ;
							}

?>

<ul class="gallery clearfix" >
				<li>
                <a href="<?php echo base_url();?>images/profile/<?php if(isset($current_pic)){ echo $current_pic ; } ?>" rel="prettyPhoto" title="">
							<img class="thumbnail" src="<?php echo base_url();?>images/profile/thumb_profile/<?php if(isset($current_pic)){ echo $current_pic ; } ?>"  alt="" style="float:left ; margin-top:10px"  width="100"  > </a>
                            </li>
                            </ul>
														<h3 style="margin-top:55px ;float:left  ; margin-left:120px ;margin-top:-80px; color:#fff;text-transform:capitalize"><?php if(isset($current_name)){echo $current_name ;}?></h3>
													
							</div>
						</div>
					</div>
				</section>
<?php }else {?>
<hr class="light">
<?php } ?>

				<div class="container">

					<div class="row">
						<div class="span3">
							<aside class="sidebar">
							<div class="span6" style="padding-bottom:20px">
								<div class="thumbnail" style="float:left ; margin-left:-30px">
                                <ul class="gallery clearfix">
				<li>
                <a href="<?php echo base_url();?>images/profile/<?php if(isset($pic)){ echo $pic ; } ?>" rel="prettyPhoto" title="">
								<img src="<?php echo base_url();?>images/profile/thumb_profile/<?php if(isset($pic)){ echo $pic ; } ?>" height="140" width="100" ></a>
                                
                                </li></ul>
														
                                                    </div>
                                                    
                                                    <div  style="float:left ; margin-left:10px">
                                                    <div class="post-meta">
															<strong style="text-transform:capitalize"> <?php if(isset($username)){echo $username ;}?></strong>
													</div>
                                                       <div class="post-meta">
															<small><?php if(isset($job)){echo $job ;}?></small>
													</div>
                                                    <div class="post-meta">
                                                     <?php if(isset($rate)){ ?>
                                                     <?php if($rate >= 200 && $rate < 400){ ?>
														<i class="icon-star"></i>
                                                         <?php }elseif($rate >= 400 && $rate < 600 ){?>
                                                         <i class="icon-star"></i><i class="icon-star"></i>
                                                        <?php }elseif($rate >= 600 && $rate < 800){?> 
                                                         <i class="icon-star"></i><i class="icon-star"></i> <i class="icon-star"></i>
                                                        <?php }elseif($rate >= 800 && $rate < 1000){?> 
                                                         <i class="icon-star"></i><i class="icon-star"></i> <i class="icon-star"></i><i class="icon-star"></i>
                                                        <?php }elseif($rate >800){?> 
                                                         <i class="icon-star"></i><i class="icon-star"></i> <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i>
                                                        <?php }else{?>
                                                        
                                                         <i class="icon-star-half"></i>
                                                        <?php }}?>
													</div>
                                                    <?php if(($this->session->userdata('logged_in')) && $segment_id == $current_id){?>
                                                    <div class="icon-edit"><a href="#">edit</a></div>
                                                    <?php }?>
                                                    </div>
											</div>		
                                             <?php
                                if (isset($owner)) {
                                    if ($owner == 'yes') {
                                        ?>
                                        <td>
                                            <?php echo form_open_multipart('user/upload_pic'); ?>


                                            <div id='file_browse_wrapper'>
                                                <?php echo form_upload(array('id' => 'file_browse', 'name' => 'userfile')); ?>
                                            </div>


                                            <?php echo form_submit(array('id' => 'upload_button', 'name' => 'post_upload2'), 'upload'); ?>
                                            <?php echo form_close(); ?></td>
                                        <?php
                                    }
                                }
                                ?> 

								<h4 style="float:left">About <span style="text-transform:capitalize" > <?php if(isset($username)){echo $username ;}?></span>
                                </h4>
                                <?php if(($this->session->userdata('logged_in')) && $segment_id == $current_id){?>
                                <div class="icon-edit" style="float:left ; margin-left:5px ; margin-top:8px"><a href="#">edit</a></div>
                                                    <?php }?>
                                </br> </br>
								<p style="float:left;word-wrap:break-word;width:270px;">
									<?php if(isset($hobbit)){echo nl2br($hobbit) ;}?>
								</p>


								<div class="tabs">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#popularPosts" data-toggle="tab">Last Update</a></li>
										<li><a href="#recentPosts" data-toggle="tab">Last Activities</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="popularPosts">
											<ul class="simple-post-list">
												<li>
													<div class="post-image">
														<div class="thumbnail">
															<a href="javascript:if(confirm(%27http://www.crivos.com/themes/porto/blog-single.html  \n\nThis file was not retrieved by Teleport Pro, because the server reports that this file cannot be found.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.crivos.com/themes/porto/blog-single.html%27" tppabs="http://www.crivos.com/themes/porto/blog-single.html">
																<img src="<?php echo base_url();?>images/blog-thumb-1.jpg" tppabs="http://www.crivos.com/themes/porto/img/blog/blog-thumb-1.jpg" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="javascript:if(confirm(%27http://www.crivos.com/themes/porto/blog-single.html  \n\nThis file was not retrieved by Teleport Pro, because the server reports that this file cannot be found.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.crivos.com/themes/porto/blog-single.html%27" tppabs="http://www.crivos.com/themes/porto/blog-single.html">Nullam Vitae Nibh Un Odiosters</a>
														<div class="post-meta">
															 Jan 10, 2013
														</div>
													</div>
												</li>
												<li>
													<div class="post-image">
														<div class="thumbnail">
															<a href="javascript:if(confirm(%27http://www.crivos.com/themes/porto/blog-single.html  \n\nThis file was not retrieved by Teleport Pro, because the server reports that this file cannot be found.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.crivos.com/themes/porto/blog-single.html%27" tppabs="http://www.crivos.com/themes/porto/blog-single.html">
																<img src="<?php echo base_url();?>images/blog-thumb-2.jpg" tppabs="http://www.crivos.com/themes/porto/img/blog/blog-thumb-2.jpg" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="javascript:if(confirm(%27http://www.crivos.com/themes/porto/blog-single.html  \n\nThis file was not retrieved by Teleport Pro, because the server reports that this file cannot be found.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.crivos.com/themes/porto/blog-single.html%27" tppabs="http://www.crivos.com/themes/porto/blog-single.html">Vitae Nibh Un Odiosters</a>
														<div class="post-meta">
															 Jan 10, 2013
														</div>
													</div>
												</li>
												<li>
													<div class="post-image">
														<div class="thumbnail">
															<a href="javascript:if(confirm(%27http://www.crivos.com/themes/porto/blog-single.html  \n\nThis file was not retrieved by Teleport Pro, because the server reports that this file cannot be found.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.crivos.com/themes/porto/blog-single.html%27" tppabs="http://www.crivos.com/themes/porto/blog-single.html">
																<img src="<?php echo base_url();?>images/blog-thumb-3.jpg" tppabs="http://www.crivos.com/themes/porto/img/blog/blog-thumb-3.jpg" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="javascript:if(confirm(%27http://www.crivos.com/themes/porto/blog-single.html  \n\nThis file was not retrieved by Teleport Pro, because the server reports that this file cannot be found.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.crivos.com/themes/porto/blog-single.html%27" tppabs="http://www.crivos.com/themes/porto/blog-single.html">Odiosters Nullam Vitae</a>
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
															<a href="javascript:if(confirm(%27http://www.crivos.com/themes/porto/blog-single.html  \n\nThis file was not retrieved by Teleport Pro, because the server reports that this file cannot be found.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.crivos.com/themes/porto/blog-single.html%27" tppabs="http://www.crivos.com/themes/porto/blog-single.html">
																<img src="<?php echo base_url();?>images/blog-thumb-2.jpg" tppabs="http://www.crivos.com/themes/porto/img/blog/blog-thumb-2.jpg" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="javascript:if(confirm(%27http://www.crivos.com/themes/porto/blog-single.html  \n\nThis file was not retrieved by Teleport Pro, because the server reports that this file cannot be found.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.crivos.com/themes/porto/blog-single.html%27" tppabs="http://www.crivos.com/themes/porto/blog-single.html">Vitae Nibh Un Odiosters</a>
														<div class="post-meta">
															 Jan 10, 2013
														</div>
													</div>
												</li>
												<li>
													<div class="post-image">
														<div class="thumbnail">
															<a href="javascript:if(confirm(%27http://www.crivos.com/themes/porto/blog-single.html  \n\nThis file was not retrieved by Teleport Pro, because the server reports that this file cannot be found.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.crivos.com/themes/porto/blog-single.html%27" tppabs="http://www.crivos.com/themes/porto/blog-single.html">
																<img src="<?php echo base_url();?>images/blog-thumb-3.jpg" tppabs="http://www.crivos.com/themes/porto/img/blog/blog-thumb-3.jpg" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="javascript:if(confirm(%27http://www.crivos.com/themes/porto/blog-single.html  \n\nThis file was not retrieved by Teleport Pro, because the server reports that this file cannot be found.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.crivos.com/themes/porto/blog-single.html%27" tppabs="http://www.crivos.com/themes/porto/blog-single.html">Odiosters Nullam Vitae</a>
														<div class="post-meta">
															 Jan 10, 2013
														</div>
													</div>
												</li>
												<li>
													<div class="post-image">
														<div class="thumbnail">
															<a href="javascript:if(confirm(%27http://www.crivos.com/themes/porto/blog-single.html  \n\nThis file was not retrieved by Teleport Pro, because the server reports that this file cannot be found.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.crivos.com/themes/porto/blog-single.html%27" tppabs="http://www.crivos.com/themes/porto/blog-single.html">
																<img src="<?php echo base_url();?>images/blog-thumb-1.jpg" tppabs="http://www.crivos.com/themes/porto/img/blog/blog-thumb-1.jpg" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="javascript:if(confirm(%27http://www.crivos.com/themes/porto/blog-single.html  \n\nThis file was not retrieved by Teleport Pro, because the server reports that this file cannot be found.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.crivos.com/themes/porto/blog-single.html%27" tppabs="http://www.crivos.com/themes/porto/blog-single.html">Nullam Vitae Nibh Un Odiosters</a>
														<div class="post-meta">
															 Jan 10, 2013
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								
								<div class="team-list sort-destination" data-sort-id="team" style="float:left ; margin-left:-15px"  >
							<h3 style="margin-left:10px;"><?php if(isset($username)){echo $username ;}?> Gallery</h3>
                            <ul class="gallery clearfix">
                                   <?php if(isset($user_gallerys)){foreach($user_gallerys as $gallery ){?>
								<div class="img-polaroid" style="float:left ; margin-left:10px  ; margin-top:10px ; ">
                                <li>
                                     <a href="<?php echo base_url();?>albums/big/<?php echo $gallery->photo_name ;?> " rel="prettyPhoto[gallery2]" 
 title="">
										<img alt="" src="<?php echo base_url();?>albums/thumbs/<?php echo $gallery->photo_name; ?>" >
								</a>
                                </li>
                                    </div>
                                    <?php }} ?>
                                    </ul>
                                   
                                    
                                    </div>
                                    
                                
                                    
                               
							</aside>
						</div>
                        
                        
                        <div class="row" style="float:left ; margin-left:0">
                        
                        <h3 style="color:#09c ; margin-left:30px"><i style="color:#000 ; font-style:normal;text-transform:capitalize"><?php if(isset($username)){echo $username ;}?>'s</i> Albums</h3>
                        
						<ul class="portfolio-list sort-destination" data-sort-id="portfolio">
							
                            <?php if(isset($user_albums)){foreach($user_albums as $album){?>
							<li class="span3 isotope-item <?php echo $album->dept_name?>">
								<div class="portfolio-item thumbnail">
									<a href="<?php echo base_url();?>home/show_album_photo/<?php echo $album->id ;?>"  class="thumb-info">
										<img alt="" src="<?php echo base_url();?>albums/thumbs/<?php echo $album->photo_name?>"  >
										<span class="thumb-info-title">
											<span class="thumb-info-inner"><?php echo $album->name?></span>
											<span class="thumb-info-type"><?php echo $album->dept_name?></span>
										</span>
										<span class="thumb-info-action">
											<span title="Universal" href="#" class="thumb-info-action-icon"><i class="icon-link"></i></span>
										</span>
									</a>
								</div>
                                
							</li>
                            <?php }}else{?>
                           <h3 style="color:#09c ; margin-left:30px">  <i style="color:#000 ; font-style:normal;text-transform:capitalize"><?php if(isset($username)){echo $username ;}?></i>
                             didn't tagged in any albums until yet</h3>
                            <?php }?>
                            
                            </ul>
                            </div>
                            
                            
						<div class="span9" style="margin-top:-40px">

<?php 
						$user_id = $this->session->userdata('user_id');
						$user_date= $this->user_model->get_user_by_id($user_id);
							foreach ($user_date as $row){
								$name = $row->name; 
							$pic = $row->pic ;
							}

?>
							<div class="post-content">

										<div class="post-block post-comments clearfix">
											<h3 style="color:#09c"><i class="icon-comments" style="color:#09c"></i>Latest Posts</h3>
											<?php if(($this->session->userdata('logged_in')) && $segment_id == $user_id){?>
											<ul class="comments">
												<li>
                                                <?php echo form_open('user/add_post'); ?>
													<div class="comment">
														<div class="thumbnail">
															<img class="avatar" alt="" src="<?php echo base_url();?>/images/profile/<?php echo $pic; ?>">
														</div>
														<div class="comment-block">
															<div class="comment-arrow"></div>
															<span class="comment-by">
																<strong></strong>
																<span class="pull-right">
																	
																</span>
															</span>
                                                             <span><?php  echo validation_errors(); ?></span>
															<p><textarea name="post" class="span7"  placeholder="What's on your mind?" required></textarea></p>
															<span ><button class="btn btn-info btn-small pull-right" ><strong>Post</strong></button></span>
														</div>
													</div>
                                                    <?php echo form_close();?>
                                                    </li></ul>
													<hr class="light">
													<?php }?>

													
                                            
                                            
                                            
                                            <?php  
											if(count($posts) != 0 ){
											foreach ($posts as $row){
							$post_id = $row->id;	
							$post_user_id = $row->user_id;				
							$content = $row->content ;
							$post_date = $row->post_date ;
												$user_data= $this->user_model->get_user_by_id($post_user_id);
							foreach ($user_data as $row){
								$username_post = $row->name; 
							$pic_post = $row->pic ;
							?>
                            
                            
                                            <ul class="comments">
												<li>
													<div class="comment">
														<div class="thumbnail">
															<img class="avatar" alt="" src="<?php echo base_url();?>/images/profile/<?php echo $pic_post; ?>">
														</div>
														<div class="comment-block" >
															<div class="comment-arrow"></div>
															<span class="comment-by">
																<strong><?php echo $username_post; ?></strong>
																<span class="pull-right">
																</span>
															</span>
															<p style="word-wrap:break-word"><?php echo $content; ?></p>
															<span class="date pull-right"><?php echo $post_date; ?></span>
														</div>
													</div>
                                  
													<ul class="comments reply">
                                                  
                                                         <?php $comments = $this->load->user_model->get_comments($post_id);
														 foreach ($comments as $r){
														 $user_comment_id = $r->user_id;
														 $comment = $r->comment;
														 $comment_date = $r->comment_date;
														 $user_data= $this->user_model->get_user_by_id($user_comment_id);
														 
							foreach ($user_data as $row){
								$username_comment = $row->name; 
							$pic_comment = $row->pic ;
														  ?>
														<li>
															<div class="comment">
																<div class="thumbnail">
																	<?php if($user_comment_id != $segment_id){?>
                                                              <a href="<?php echo base_url();?>user/profile/<?php echo $user_comment_id ;?>" >
															  <?php }?>
                                                    <img class="avatar" alt="" src="<?php echo base_url();?>/images/profile/<?php echo $pic_comment; ?>">
                                                                     </strong><?php if($user_comment_id != $segment_id){?></a><?php }?>
																</div>
																<div class="comment-block" >
																	<div class="comment-arrow"></div>
																	<span class="comment-by">
																		<?php if($user_comment_id != $segment_id){?>
                                                              <a href="<?php echo base_url();?>user/profile/<?php echo $user_comment_id ;?>" >
															  <?php }?>
                                                                        <strong><?php echo $username_comment; ?>
                                                                        </strong><?php if($user_comment_id != $segment_id){?></a><?php }?>
																		<span class="pull-right">
																		</span>
																	</span>
																	<p style="word-wrap:break-word"><?php echo $comment; ?></p>
																	<span class="date pull-right"><?php echo $comment_date; ?></span>
																</div>
															</div>
														</li>
                                                        <?php 
							}
							}
														?>
                                                        
                                                          <?php if(($this->session->userdata('logged_in'))){?>
                                                    <?php echo form_open('user/add_comment/'.$post_id.'/'.$segment_id); ?>
														<li>
															<div class="comment">
																<div class="thumbnail">
																	<img class="avatar" alt="" src="<?php echo base_url();?>/images/profile/<?php echo $pic; ?>" >
																</div>
																<div class="comment-block">
																	<div class="comment-arrow"></div>
																	<span class="comment-by">
																		<strong><?php $name ; ?></strong>
																		<span class="pull-right">
																			
																		</span>
																	</span>
                                                                    <span><?php  echo validation_errors(); ?></span>
																	<p><textarea name="comment" class="span6" placeholder="Write a comment..."  required></textarea></p>
																	<span> <button class="btn btn-small pull-right" ><i class="icon-reply"></i> Comment</button></span>
																</div>
															</div>
														</li>
                                                         <?php echo form_close();?>
                                                         <?php } ?>
                                                        
													</ul>
												</li>
											<?php }?>
											<hr class="light">
											<?php }
											}else{?>
												<center><span>There are not posts </span></center>
												<?php }?>	
											</ul>



										</div>
                                        
                                        

							</div>
						</div>

						</div>

					</div>

				</div>

				
	<?php if($segment_id == $this->session->userdata('user_id')){ if( $time=='' || $faculty=='' || $travel=='' || $about=='' ){?>			
<div id="modal">
	<div id="heading">
		You must fill out this fields first.
	</div>

	<div id="content">
		
                                <?php echo form_open('user/add_user_step2'); ?>
                                
                                <div id="valid" style="color:#F00">
                                <?php  echo validation_errors(); ?>
                                </div>
                        
								<div class="row controls" id="contactForm" style="padding: 10px 0 10px 45px;;">
									<div class="span3 control-group">
										<label>Donated Time by Houres *</label>
										<input type="text" value="" maxlength="100" class="span3" name="time" placeholder="Houre Per Day" id="email" required>
									</div>
									<div class="span3 control-group">
										<label>Can You Travel With us ? *</label>
										 <select name="travel" size="1" class="span3" required>
								
										<option value="" >Select</option>
										<option value="yes" >yes</option>
										<option value="no" >No</option>
								
										</select>
									</div>
									<div class="span3 control-group">
										<label>Your Faculty *</label>
										 <select name="faculty" size="1" class="span3" required>
								
										<option value="" >Select</option>
										<option value="yes" >yes</option>
										<option value="no" >No</option>
								
										</select>
									</div>
									 <div class="span3 control-group">
										<label>How can you help us *</label>
										<textarea maxlength="300"  rows="5" class="span3" style="resize: none;" name="about" id="message"><?php echo $this->input->post('about') ?></textarea>
									</div>
								</div>
								
								<div class="btn-toolbar">
									<input type="submit" value="Save" style="margin-left: 45px;margin-top: -40px;position:relative" class="btn btn-primary btn-large" data-loading-text="Loading...">
								</div>
							 <?php echo form_close();?>
	</div>
	<?php }}?>
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
