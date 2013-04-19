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
							<li class="facebook"><a href="#"  target="_blank" title="Facebook">Facebook</a></li>
							<li class="twitter"><a href="#"  target="_blank" title="Twitter">Twitter</a></li>
							<li class="linkedin"><a href="#"  target="_blank" title="Linkedin">Linkedin</a></li>
						</ul>
					</div>
					<nav>
						<ul class="nav nav-pills nav-main" id="mainMenu">
							
                            <li>
<a href="<?php echo base_url(); ?>admin/panel">Unconfirmed Users  <strong>(<?php $this->load->model('civou/admin_model'); echo count($this->admin_model->get_unconfirmed_user()); ?>)</a></strong></a></li>

<li><a href="<?php echo base_url(); ?>admin/users">Actived Users <strong>(<?php $this->load->model('civou/admin_model'); echo count($this->admin_model->get_confirmed_user()); ?>)</strong></a></li>

<li><a href="<?php echo base_url(); ?>admin/events">New Event</a></li>

<li><a href="<?php echo base_url(); ?>admin/allevents">Events</a></li>

<li><a href="<?php echo base_url(); ?>admin/add_category">Add Category</a></li>

<li><a href="<?php echo base_url(); ?>admin/show_delete_category">Delete Category</a></li>  

<li><a href="<?php echo base_url(); ?>admin/photo_gallery">Add  Album</a></li> 
<li><a href="<?php echo base_url(); ?>admin/tag_photo_gallery">Tags users </a></li>  
                            
                            
						</ul>
					</nav>
				</div>
</header>
