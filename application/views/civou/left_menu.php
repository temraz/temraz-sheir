<li>
<a href="<?php echo base_url(); ?>admin/panel">Unconfirmed Users  <strong>(<?php $this->load->model('civou/admin_model'); echo count($this->admin_model->get_unconfirmed_user()); ?>)</a></strong></a></li>

<li><a href="<?php echo base_url(); ?>admin/users">Actived Users <strong>(<?php $this->load->model('civou/admin_model'); echo count($this->admin_model->get_confirmed_user()); ?>)</strong></a></li>

<li><a href="<?php echo base_url(); ?>admin/events">New Event</a></li>

<li><a href="<?php echo base_url(); ?>admin/allevents">Events</a></li>

<li><a href="<?php echo base_url(); ?>admin/add_category">Add New Pic Category</a></li>

<li><a href="<?php echo base_url(); ?>admin/show_delete_category">Delete Pics Category</a></li>  

<li><a href="<?php echo base_url(); ?>admin/photo_gallery">Add New Album</a></li> 
<li><a href="<?php echo base_url(); ?>admin/tag_photo_gallery">Tags users in Album</a></li>  
        
</ul>
</aside>					
</div>