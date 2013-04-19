<header>
		

				<div class="container">
					<h1 class="logo">
						<a href="index.html" tppabs="http://www.crivos.com/themes/porto/index.html">
							<img alt="Porto Website Template" src="<?php echo base_url();?>images/logo.png" tppabs="http://www.crivos.com/themes/porto/img/logo.png">
						</a>
					</h1>
					<div class="search">
						<form class="form-search">
							<input type="text" class="input-medium search-query" placeholder="Search...">
							<button class="search" type="submit"><i class="icon-search"></i></button>
						</form>
					</div>
					<nav>
						<ul class="nav nav-pills nav-top">
							<li>
								<a href="about-us.html" tppabs="http://www.crivos.com/themes/porto/about-us.html"><i class="icon-angle-right"></i>About Us</a>
							</li>
							<li>
								<a href="contact-us.html" tppabs="http://www.crivos.com/themes/porto/contact-us.html"><i class="icon-angle-right"></i>Contact Us</a>
							</li>
							<li class="phone">
								<span><i class="icon-phone"></i>(02) xxxx-xxxxxx</span>
							</li>
						</ul>
					</nav>
					<div class="social-icons">
						<ul class="social-icons">
							<li class="facebook"><a href="javascript:if(confirm(%27http://www.facebook.com/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.facebook.com/%27" tppabs="http://www.facebook.com/" target="_blank" title="Facebook">Facebook</a></li>
							<li class="twitter"><a href="javascript:if(confirm(%27http://www.twitter.com/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.twitter.com/%27" tppabs="http://www.twitter.com/" target="_blank" title="Twitter">Twitter</a></li>
							<li class="linkedin"><a href="javascript:if(confirm(%27http://www.linkedin.com/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.linkedin.com/%27" tppabs="http://www.linkedin.com/" target="_blank" title="Linkedin">Linkedin</a></li>
						</ul>
					</div>
					<nav>
						<ul class="nav nav-pills nav-main" id="mainMenu">
							<li class="active">
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
					</nav>
				</div>
</header>
