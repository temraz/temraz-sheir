<header>
		

				<div class="container">
					<h1 class="logo">
						
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
								<a href="#" ></i>About Us</a>
							</li>
							<li>
								<a href="#" ></i>Contact Us</a>
							</li>
							<li class="phone">
								<span><i class="icon-phone"></i>(02) xxxx-xxxxxx</span>
							</li>
						</ul>
					</nav>
					
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
