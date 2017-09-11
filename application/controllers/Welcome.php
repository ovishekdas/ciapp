<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user');
    }
	
	public function index()
	{
		//print_r($this->session->all_userdata());
		if($this->input->post('loginSubmit')){
            $this->form_validation->set_rules('username', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if ($this->form_validation->run() == true) {
                $con['returnType'] = 'single';
                $con['conditions'] = array(
                    'user_name'=>$this->input->post('username'),
                    'user_password' => md5($this->input->post('password')),
                    'status' => '1'
                );
                $checkLogin = $this->user->getRows($con);
                if($checkLogin){
                    $this->session->set_userdata('isUserLoggedIn',TRUE);
                    $this->session->set_userdata('userId',$checkLogin['id']);
                    redirect('welcome/listing/');
                }else{
                    $data['error_msg'] = 'Wrong email or password, please try again.';
                }
            }
        }
		$this->load->view('welcome_message');
	}
	public function listing()
	{
		$this->load->view('entry_listing');
	}
	public function add()
	{
		$this->load->view('add');
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome/');
	}
}
