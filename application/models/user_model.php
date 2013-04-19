<?php

class User_model extends CI_Model {

function do_upload($id){
			 
			 $gallery_path=realpath(APPPATH.'../images/profile/');
			 $gallery_path_thumb=realpath(APPPATH.'../images/profile/thumb_profile/');
			 $gallery_path_url = base_url().'images/';
				$config=array(
				 'allowed_types'=>'jpg|JPEG|png|gif',
				 'upload_path'=>$gallery_path,
				 'max_size'=>3000
				);
				$this->load->library('upload',$config);
				if(!$this->upload->do_upload()){
					 return $error=array("error"=>$this->upload->display_errors());
					}
				
				
				 
                 $image_data = $this->upload->data();
				 //////////////////////////////////////////////
				
				//////////////////////////////////////////////
				$config2 = array(
				'source_image' => $image_data['full_path'],
				'new_image' => $gallery_path_thumb,
				'maintain_ratio' => TRUE,
				'width' => 300,
				'height' => 200
				
			     );
                 
                $this->load->library('image_lib', $config2);
				
				
				 	if(!$this->image_lib->resize()){
					 return $error=array("error"=>$this->upload->display_errors());
					}
				   
				 $sql_select="select pic from users where id= '{$id}' ";
				 $result=$this->db->query($sql_select);
				 if($result->num_rows()==1){
					 $pic_name=$result->row(0)->profile_pic;
					 if($pic_name !='default_pic.jpg'){
						 
					 $path1=APPPATH .'../images/profile/'.$pic_name;
					 $path2=APPPATH .'../images/profile/thumb_profile/'.$pic_name;
					 unlink($path1);
					 unlink($path2);
					 }
					 }else{
					 return false;
					 }
				 
				 $query_str="update users set pic = ? where id = '{$id}' ";
				 $this->db->query($query_str,$image_data['file_name']);
				 
				
				 
				
				}
		
		function update_user($id){
			$data=array(
						
						'email'=>$this->input->post('email'),
						'country'=>$this->input->post('country'),
						'city'=>$this->input->post('city'),
						'address'=>$this->input->post('address'),
						'phone'=>$this->input->post('phone'),
						'zip_code'=>$this->input->post('zip_code'),
						
						);
			
			$query_str="update user set email=?,country=?,city=?,address=?,phone=?,zip_code=? where id = '{$id}' ";
			$result= $this->db->query($query_str,$data);
			if($result){
					return true;
					}else{
						return false;
						}
			}
		//////////////////////////////////////////////
		function update_user2($id){
			$data=array(
						
						'email'=>$this->input->post('email'),
						'country'=>$this->input->post('country'),
						'city'=>$this->input->post('city'),
						'address'=>$this->input->post('address'),
						'phone'=>$this->input->post('phone'),
						'zip_code'=>$this->input->post('zip_code'),
						'amount_point'=>$this->input->post('amount_point'),
						'amount_money'=>$this->input->post('amount_money'),
						);
			
			$query_str="update user set email=?,country=?,city=?,address=?,phone=?,zip_code=?, amount_point=? , amount_money=? where id = '{$id}' ";
			$result= $this->db->query($query_str,$data);
			if($result){
					return true;
					}else{
						return false;
						}
			}
					
					
//////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////// add chat messages 
				function add_user_step2($user_id, $about, $faculty,$travel,$time){
					
					 $query_str=" update users set about=?,faculty=?,travel=?,time=? where id = '{$user_id}'";
					           
				 $result=$this->db->query($query_str, array($about, $faculty,$travel,$time,$user_id));
				if($result){
					return true;
					}else{
						return false;
						}
					
					}
			    ///////////////////////////////////////////////////////////		 
					
					public function get_user_by_id($id){
     	$this->db->where('id',$id);
			 $query = $this->db->get('users');
	  return $query->result();
	  }		
	  //////////////////////////////
	  public function get_posts($user_id){
				$query = "select * from user_posts where user_id=$user_id ORDER BY id DESC ";
					$result=$this->db->query($query);
				return $result->result();
				}
					
					public function get_comments($post_id){
				$query = "select * from post_comments where post_id=$post_id  ";
					$result=$this->db->query($query);
				return $result->result();
				}
					
}

?>




