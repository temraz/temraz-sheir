<?php

class Event_model extends CI_Model {

 public function is_event_valid($id){
				$this->db->where('id',$id);
				$query=$this->db->get('events');
				if($query->num_rows()==1){
					return true;
					}else{
						return false;
						}
				}
				
				public function get_event($id){
				$this->db->where('id',$id);
				$query=$this->db->get('events');
				return $query->result();
				}
				
				public function user_event($user_id , $event_id){
					$query = "select * from user_events where user_id=$user_id and event_id=$event_id ";
					$result=$this->db->query($query);
				return $result->result();
				}
				
				public function get_comments($event_id){
				$query = "select * from event_comments where event_id=$event_id ORDER BY id DESC ";
					$result=$this->db->query($query);
				return $result->result();
				}
				
				public function get_count_comments($event_id){
				$this->db->where('event_id',$event_id);
				$query=$this->db->get('event_comments');
				return count($query->result());
				}
				
				public function get_user_by_id($id){
     	$this->db->where('id',$id);
			 $query = $this->db->get('users');
	  return $query->result();
	  }		
}

?>




