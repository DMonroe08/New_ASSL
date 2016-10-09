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
					'password' => $this->input->post('password'),
					'is_logged_in' => true
				);
				$this->session->set_userdata($data);
				$this->users_page();
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
		$this->load->view('includes/template', $data);
		
	}
	
} //Ends Signin Controller
?>