<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
class Signin extends CI_Controller{
	
	public function load(){
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data['content'] = 'signin_page';
		$this->load->view('includes/template', $data);
	} //Ends load function
	
	public function validation(){
		//Gets Users Model and Sets Rules
		$this->load->model('users');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Passowrd', 'trim|required');
		
		//Checks if Username and Password are correct
		if($this->form_validation->run() == TRUE){
			$this->load->model('users');
			$query = $this->users->can_signin();
			
			//Set Session if loggin is TRUE
			if($query){
				$data = array(
					'username' => $this->input->post('username'),
					'firstname' => $this->input->post('firstname'),
					'password' => $this->input->post('password'),
					'is_logged_in' => true
				);
				$this->session->set_userdata($data);
				$data['firstname'] = $this->session->userdata('firstname');
				
				$this->users->user_info();
				$this->users_page();
				 
				return TRUE;
			}else{
				$this->load();
				echo "Sorry something went wrong";
			}
		}
	} //Ends validation function
	
	
	
	public function users_page(){
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data['content'] = 'users_page';
		$this->load->model('users');
		// $info['fetch_data'] = $this->users->user_info();
// 		echo var_dump($info);

$query = $this->users->can_signin();
if($query){
	$info = array(
		'firstname' => $this->input->post('firstname'),
		'lastname' => $this->input->post('lastname')
	);
	$this->session->set_userdata($info);
}

 	   $this->load->view('includes/template', $data, $info);
		


	} //Ends users page function
	
	public function update_account(){
		
		if(validation() == TRUE){
			
			
		 	$this->form_validation->set_rules('firstname','First Name','trim');
		 	$this->form_validation->set_rules('lastname','Last Name','trim');

			
		if($this->form_validation->run() == TRUE){
			$this->load->model('users');
			$change = array(
				'username' => $this->input->post('username'),
				'firstname' => $this->input->post('firstname'),
				'lastname' => $this->input->post('lastname'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
				'is_logged_in' => true
			);
			// $this->
			
		}}
	} //Ends update account function
	
	//Deletes entire account
	public function delete_account(){
		$this->load->model('users');
		$this->form_validation->set_rules('username', 'Username', 'trim|require');
		$this->form_validation->set_rules('password', 'Password', 'trim|require');
		
		if($this->users->delete_user() == TRUE){
			$data['content'] = 'home_page';
			$this->load->view('includes/template', $data);
		}else{
			$this->load->users_page();
		}
	} //Ends Delete account function
	
} //Ends Signin Controller
?>