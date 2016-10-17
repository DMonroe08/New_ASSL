<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
class Users extends CI_Model{
	
	public function can_signin(){
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		
		$query = $this->db->get('users');
		
		if($query->num_rows() > 0){
			$row = $query->row();
			$data = array(
				'username' => $row->username,
				'firstname' => $row->firstname,
				'password' => $row->password
			);
			$this->session->set_userdata($data);
			return $data;
			// echo var_dump($data);
//
			return TRUE;
		}else{
			return FALSE;
		}
	}//Ends Can Sign In Function
	
	
	
	public function user_info(){
		$this->db->where('username', $this->input->post('username'));
		$query = $this->db->get('users');
		
		if($query->num_rows() > 0){
			$row = $query->row();
			$info = array(
				'firstname' =>$row->firstname,
				'lastname' => $row->lastname
			);
			$this->session->set_userdata($info);
			return TRUE;
		}
		
	} //Ends User Info Function
	
	public function update_user(){
	} //Ends Update User Function
	
	public function delete_user(){
		$this->db->where('username', $this->input->post('username'));
		$username = ($_POST['username']);  
 		$this->db->from('users');
		$this->db->delete('users', array('username' => $username));
		
		return TRUE;
	}
	
} //Ends Users Model
?>