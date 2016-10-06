<?php
class Signup extends CI_Controller{
	
	public function load(){
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data['content'] = 'signin_page';
		$this->load->view('includes/template', $data);
	} //Ends load function
	
	
}
?>