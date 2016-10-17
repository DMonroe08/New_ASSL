<?php
class Signup extends CI_Controller{
	
	public function load(){
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data['content'] = 'signup_page';
		$this->load->view('includes/template', $data);
	} //Ends load function
	
	public function check(){
		$this->load->model('new_users');
		$check = $this->new_users->check_user();
		if($check == TRUE){
			$this->create(); //Will run create user function if the username doesn't exists
		}else{
			$retry = $check;
			if(isset($retry)){
				echo "<h3 class='error'>Sorry but that username has been taken. Please try again</h3>"; //Will echo message if the username is taken
				$this->load();
			}
			
		}
	}
	
	public function create(){
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('firstname', 'Name', 'trim|required');
		$this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		
		
		
		if($this->form_validation->run() == FALSE){
			$this->load();
		}else{
			$this->load->model('new_users'); 
			if($query = $this->new_users->create_user()){
				redirect('signin/load'); //redirects to sign in page
			}else{
				$data['main_content'] = 'Username already exists!';
				$this->load->view('signup_form', $data); //reloads sign up page
			}
		}
	} //Ends Create Member Function	
	
	
	public function newsletter(){
		$this->load->library('form_validation');
	
		$this->form_validation->set_rules('name', 'name', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		
		if($this->form_validation->run() == TRUE){
		$this->load->model('new_users'); 
		if($query = $this->new_users->newsletter()){
			return TRUE;
		}
	}
}
}
?>