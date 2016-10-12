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
				'password' => $row->password
			);
			$this->session->set_userdata($data);
			
			return TRUE;
		}else{
			return FALSE;
		}
	}//Ends Can Sign In Function
	
	public function delete_user(){
		$this->db->where('username', $this->input->post('username'));
		$username = ($_POST['username']);  
 		$this->db->from('users');
		$this->db->delete('users', array('username' => $username));
		
		return TRUE;
	}
	
} //Ends Users Model
?>