<?php include('admin_header.php')?>
<?php include('left_menu.php')?>
		<title>New Event</title>
				
<div class="span8" style="float:left ; margin-left:70px">

<h2>New Event</h2>
                                
								<hr />
                                <?php echo form_open_multipart('admin/insert_event'); ?>
                                <?php if (validation_errors()){ ?>
                                <div class="alert alert-error">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>Error! <?php  echo validation_errors(); ?></strong> 
							</div>
                                <?php } if(isset($inserted) && $inserted == 1){?>
                                <div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>Success!</strong> The Event inserted Successfuly. 
							</div>
                            <?php } ?>
								<div class="row controls" id="contactForm">
                              
									<div class="span3 control-group" style="width:100%">
										<label>Event Name *</label>
										<input type="text" value="" maxlength="100" class="span3" name="event_name"  required>
									</div>
                                    <div class="span3 control-group" style="width:100%">
										<label>Event logo *</label>
										<input type="file" name="photo"  required>
									</div>
                                    <div class="span3 control-group" style="width:100%">
										<label>Event Date *</label>
										<input type="date" value="" maxlength="100" class="span3" name="event_date"  required>
									</div>
                                    <div class="span3 control-group" style="width:100%">
										<label>Event Description *</label>
										<textarea  name="about_event"  maxlength="300"  rows="5" class="span6" required></textarea>
									</div>
                                    <h3>Links</h3>
                                    <div class="span3 control-group" style="width:100%">
										<label>Facebook URL</label>
										<input type="url"  maxlength="100" class="span3" name="facebook"  required>
									</div>
                                    
                                    <div class="span3 control-group" style="width:100%">
										<label>Twitter URL</label>
										<input type="text" value="" maxlength="100" class="span3" name="twitter"  required>
									</div>
                                    
								</div>
								
								<div class="btn-toolbar">
									<input type="submit" value="Publish" class="btn btn-primary btn-large" data-loading-text="Loading...">
								</div>
							 <?php echo form_close();?>
                            </div>
                  </div>          

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
