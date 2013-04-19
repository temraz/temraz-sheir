<?php include('admin_header.php')?>
<?php include('left_menu.php')?>
		<title>Events</title>
				
<div class="span8" style="float:left ; margin-left:70px">

<ul class="nav nav-pills sort-source" data-sort-id="portfolio" data-option-key="filter">
						<li data-option-value=".websites" ><a href="<?php $id= $this->uri->segment(3); echo base_url()."admin/unconfirmed/".$id;?>">Unconfirmed</a></li>
						<li data-option-value=".logos" class="active"><a href="<?php echo base_url()."admin/attends/".$id;?>">Attends</a></li>
						
					</ul>
                    
<table class="table table-striped">
								<thead>
									<tr>
                                    <th>
											#
										</th>
										<th>
											Username
										</th>
										<th>
											Email
										</th>
										<th>
											Job
										</th>
                                        <th>
											City
										</th>
                                        <th>
											Confirm
										</th>
									</tr>
								</thead>
								<tbody>
                                <?php $count=1;
								foreach($attends as $row){ 
								$id = $row->id;
								$user_id = $row->user_id;
								$user_data=$this->admin_model->get_user_by_id($user_id);
								foreach($user_data as $row){
										$username = $row->name 	;
										$email  = $row->email 	;
										$job = $row->job 	;
                                        $city  = $row->city 	;
?>
									<tr>
                                    <td>
											<?php echo $count; ?>
										</td>
										<td>
											<?php echo $username; ?>
										</td>
										<td>
											<?php echo $email; ?>
										</td>
                                        <td>
											<?php echo $job; ?>
										</td>
                                        <td>
											<?php echo $city; ?>
										</td>
                                       <td>
											<i class="icon-ok" style="color:#060; margin-left:15px"></i>
                                            </td>
                                    
										
									</tr>
                                    <?php 
								}
								$count++;
								}?>
                                    </tbody></table>

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
