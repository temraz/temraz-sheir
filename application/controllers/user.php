<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
    function index(){
        
        $this->profile();
        
    }
    ///////////////////
    function profile(){
		
         if ( $this->uri->segment(3) != '') {
             $this->load->model('user_model');
			$id=$this->uri->segment(3);
			$data['segment_id']=$this->uri->segment(3);
			$this->load->model('site_model');
			$data['posts'] =$this->user_model->get_posts($id);
			if($this->site_model->select_user($id)){				
				$user_data=$this->site_model->select_user($id);
				$data['user_id']=$user_data['id']; 
				$data['username']=$user_data['username'];
				$data['email']=$user_data['email'];
				$data['city']=$user_data['city'];
				$data['job']=$user_data['job'];
				$data['prof']=$user_data['prof'];
				$data['pic']=$user_data['pic'];
				$data['rate']=$user_data['rate'];
				$data['hobbit']=$user_data['hobbit'];
                
				$id=$user_data['id'];
				if ($this->session->userdata('user_id')==$id) {
					 $data['owner']='yes';
					 }else{
						 $data['owner']='no';
						 }
						 
				if($this->site_model->select_user_step2($id)){
				    $user_data2=$this->site_model->select_user_step2($id);
				    $data['faculty']=$user_data2['faculty'];
				    $data['travel']=$user_data2['travel'];
				    $data['about']=$user_data2['about'];
				    $data['time']=$user_data2['time'];
				    
				    
				    }
					if($this->site_model->select_gallery($id)){
						$data['user_gallerys']=$this->site_model->select_gallery($id);
						$data['user_albums']=$this->site_model->select_user_albums($id);
						
						}
					
							 
				}
				
						 
            $this->load->view('profile',$data);
            
        }else{
           			 
            $this->load->view('error');
        }
        
        
    }
	
	//////////////////////////////////////// upload profile pic
	
	function upload_pic(){
		 if ($this->session->userdata('logged_in')) {
			 $this->load->model('user_model');
		if($this->input->post('post_upload2')){
			 $id=$this->session->userdata('user_id');
			$upload=$this->user_model->do_upload($id);			
			$data['error']="svsdf";
			redirect('user/profile',$data);
			}
			
			 
			 }else{  redirect('site/index');}
		
		}
		
/////////////////////////////////////////////////////

    /////////////////////////////////////////////////////// add chat_messages
    function add_user_step2() {
        
         if ($this->session->userdata('logged_in')) {   
            
            $this->load->library('form_validation');
		
			$this->form_validation->set_rules('time', 'Time', 'required|trim|max_length[2]|xss_clean');
			$this->form_validation->set_rules('about', 'About', 'required|max_length[500]|trim|xss_clean');
			$this->form_validation->set_rules('travel', 'Travel', 'required|max_length[30]|trim|xss_clean');
			$this->form_validation->set_rules('faculty', 'Faculty', 'required|max_length[130]|trim|xss_clean');
		if($this->form_validation->run()){	
            $user_id = $this->session->userdata('user_id');
           $time = $this->input->post('time');
            $about = $this->input->post('about');
            $faculty = $this->input->post('faculty');
            $travel = $this->input->post('travel');
            
           

            $this->load->model('user_model');
            if ($this->user_model->add_user_step2($user_id, $about, $faculty,$travel,$time)) {
                redirect('user/profile');
            } else {
                //no chat return
            }
		}else{
	$id=$this->session->userdata('user_id');
			$this->load->model('site_model');
			if($this->site_model->select_user($id)){				
				$user_data=$this->site_model->select_user($id);
				$data['user_id']=$user_data['id']; 
				$data['username']=$user_data['username'];
				$data['email']=$user_data['email'];
				$data['city']=$user_data['city'];
				$data['job']=$user_data['job'];
				$data['prof']=$user_data['prof'];
				$data['pic']=$user_data['pic'];
				$data['hobbit']=$user_data['hobbit'];

				$id=$user_data['id'];
				if ($this->session->userdata('user_id')==$id) {
					 $data['owner']='yes';
					 }else{
						 $data['owner']='no';
						 }
						 
				if($this->site_model->select_user_step2($id)){
				    $user_data2=$this->site_model->select_user_step2($id);
				    $data['faculty']=$user_data2['faculty'];
				    $data['travel']=$user_data2['travel'];
				    $data['about']=$user_data2['about'];
				    $data['time']=$user_data2['time'];
				    
				    
				    }		 
				}
				
						 
            $this->load->view('profile',$data);	    
		}
        } else {

            redirect('home');
        }
    }
    ////////////////////////////////////////////////////////////////
 ///////////////////
    function edit_profile(){
         if ($this->session->userdata('logged_in')) {
             
			// print_r($this->session->userdata); 
			$id=$this->session->userdata('user_id');
			$this->load->model('site_model');
			if($this->site_model->select_user($id)){
				$user_data=$this->site_model->select_user($id);
				$data['id']=$user_data['id'];
				$data['username']=$user_data['username'];
				$data['email']=$user_data['email'];
				$data['city']=$user_data['city'];
				$data['address']=$user_data['address'];
				$data['phone']=$user_data['phone'];
				$data['country']=$user_data['country'];
				$data['zip_code']=$user_data['zip_code'];
				$data['pic']=$user_data['pic'];
				$id=$user_data['id'];
				}
				
				 if ($this->session->userdata('user_id')==$id) {
					 $data['owner']='yes';
					 }else{
						 $data['owner']='no';
						 }
						 
            $this->load->view('user_edit',$data);
            
        }else{
            redirect('site/index');
        }
        
    }
	/////////////////////////////////////////////////////////////
	public function edit_user_validation(){
		if ($this->session->userdata('logged_in')) {
			$this->load->library('form_validation');
		
			$this->form_validation->set_rules('email', 'Email', 
			                                 'required|trim|xss_clean|valid_email|max_length[100]|
											 ');
			$this->form_validation->set_rules('country', 'Country', 'required|trim|xss_clean');
			$this->form_validation->set_rules('city', 'city', 'required|max_length[30]|trim|xss_clean');
			$this->form_validation->set_rules('zip_code', 'Zip code', 'required|max_length[30]|trim|xss_clean|numeric');
			
											 
			$this->form_validation->set_rules('address', 'Address', 'required|max_length[100]|trim|xss_clean');
			$this->form_validation->set_rules('phone', 'Phone', 'required|max_length[20]|trim|xss_clean|numeric');
			
			
			
			

           
			 $this->form_validation->set_message('valid_email',"البريد الالكتروني الذي تم ادخاله غير صحيح ");
			
			  

			
			if($this->form_validation->run()){
			 
             
			// print_r($this->session->userdata); 
			$id=$this->session->userdata('user_id');
			$this->load->model('user_model');
			if($this->user_model->update_user($id)){
			$data['updated']='تم تعديل بياناتك بنجاح';
			
			
			$id=$this->session->userdata('user_id');
			$this->load->model('site_model');
			if($this->site_model->select_user($id)){
				$user_data=$this->site_model->select_user($id);
				$data['id']=$user_data['id'];
				$data['username']=$user_data['username'];
				$data['email']=$user_data['email'];
				$data['city']=$user_data['city'];
				$data['address']=$user_data['address'];
				$data['phone']=$user_data['phone'];
				$data['country']=$user_data['country'];
				$data['zip_code']=$user_data['zip_code'];
				$data['pic']=$user_data['pic'];
				}
            $this->load->view('user_edit',$data);
			
			
			
			}
				
				}else{
					
					$id=$this->session->userdata('user_id');
			$this->load->model('site_model');
			if($this->site_model->select_user($id)){
				$user_data=$this->site_model->select_user($id);
				$data['id']=$user_data['id'];
				$data['username']=$user_data['username'];
				$data['email']=$user_data['email'];
				$data['city']=$user_data['city'];
				$data['address']=$user_data['address'];
				$data['phone']=$user_data['phone'];
				$data['country']=$user_data['country'];
				$data['zip_code']=$user_data['zip_code'];
				$data['pic']=$user_data['pic'];
				}
				
			$data['not_updated']='عفوا لا يمكن تعديل بيناتك حاليا حاول مره اخري من فضلك';
            $this->load->view('user_edit',$data);
			
			
					
			
						}		
			}else{
				 redirect('site/index');
				}
			}				
		
	function visit_profile(){
		if($this->session->userdata('logged_in')){
		if($this->uri->segment(3) != ''){
			$user_id=$this->uri->segment(3);
			$this->load->model('user_model');
			if($this->user_model->can_visit_user($user_id)){
				
				
				$this->load->model('site_model');
			if($this->site_model->select_user($user_id)){
				$user_data=$this->site_model->select_user($user_id);
				$data['recev_id']=$user_data['id'];
				$data['username']=$user_data['username'];
				$data['email']=$user_data['email'];
				$data['city']=$user_data['city'];
				$data['country']=$user_data['country'];
				$data['pic']=$user_data['pic'];
				$data['user_id']=$user_data['id'];
		
				
				$id=$user_data['id'];
				if ($this->session->userdata('user_id')==$id) {
					 $data['owner']='yes';
					 }else{
						 $data['owner']='no';
						 }
				}
				
				 
						 
            $this->load->view('user_profile',$data);
            
				
				}else{
				redirect('site/error');
				}
			}else{
				redirect('site/error');
				}
			}else{
			     redirect('site/index');
				}
		
		
		}
		public function add_post()
	{
		/*if ($this->session->userdata('logged_in')) {*/
			$user_id = $this->session->userdata('user_id');
			$content = $this->input->post('post');
			$date = date("M j, Y, D g:i a");
			$this->load->library('form_validation');
			 $this->form_validation->set_rules('post', 'Post', 'required|max_length[500]|trim|xss_clean');
			 if ($this->form_validation->run()) {
			$this->load->model('event_model');
			
			$data = array( 'user_id'=>$user_id , 
			'content'=>$content,
			);
			if($this->db->insert('user_posts',$data)){
				redirect('user/profile/'.$user_id);
				}
			 }else {
				 redirect('home/profile'.$user_id);
				 }
	/*}
	else{
            redirect('home');
        }*/
	}
	
	public function add_comment()
	{
		/*if ($this->session->userdata('logged_in')) {*/
			$user_id = $this->session->userdata('user_id');
			$post_id= $this->uri->segment(3);
			$segment_id= $this->uri->segment(4);
			$comment = $this->input->post('comment');
			$date = date("M j, Y, D g:i a");
			$this->load->library('form_validation');
			 $this->form_validation->set_rules('comment', 'Comment', 'required|max_length[500]|trim|xss_clean');
			 if ($this->form_validation->run()) {
			$this->load->model('user_model');
			
			$data = array( 'user_id'=>$user_id , 
			'post_id'=>$post_id,
			'comment'=>$comment,
			'comment_date'=>$date);
			if($this->db->insert('post_comments',$data)){
				redirect('user/profile/'.$segment_id);
				}
			 }else {
				 redirect('user/profile/'.$segment_id);
				 }
	/*}
	else{
            redirect('home');
        }*/
	}
		
	
	
}

?>