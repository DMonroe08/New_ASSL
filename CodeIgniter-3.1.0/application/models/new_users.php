<?php
class New_users extends  CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	} //Ends Construct Funtion

	
	public function check_user(){
		$this->db->where('username', $this->input->post('username'));
		$username = ($_POST['username']);  
		$query = $this->db->get('users');
		
		
		if($query->num_rows() > 0){ //brings back how many rows of usernames
			$row = $query->row(); 
			return FALSE; //No existing user with that username 
		}else{
			return TRUE; //existing user with that username 
		}
		
	}
	
	public function create_user(){
		$new_member_insert_data = array(
			'firstname' =>$this->input->post('firstname'),
			'lastname' =>$this->input->post('lastname'),
			'email' =>$this->input->post('email'),
			'username' =>$this->input->post('username'),
			'password' =>md5($this->input->post('password'))
		);
		
		$insert = $this->db->insert('users', $new_member_insert_data);
		return $insert;
	}
	
	public function newsletter(){
		$newsletter = array(
		'name' => $this->db->where('name', $this->input->post('name')),
		'email' => $this->db->where('email', $this->input->post('email'))
	);
	$insert_newsletter = $this->db->insert('newsletter', $newsletter);
		
		return $newsletter;
	}
} // Ends New_users Function
?>