<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_post');
	}
	function index($start = 0)
	{

	   $data['posts'] = $this->m_post->get_posts(5, $start);
	   $data['title'] = 'Login';
	   $data['error'] = '';
	   $data['main_content'] = 'backend/login_form';
	   $this->load->view('includes/t_frontend', $data);
	}

	function validate_credentials($start = 0)
	{
	 	$this->load->model('user');
	 	$query = $this->user->validate();
	 	if($query)
	 	{
	 		$data = array(
	 				'username' => $this->input->post('username'),
	 				'is_logged_in' => true,
	 				'role' => $this->user->member_role($this->input->post('username')),
	 				'user_id' => $this->user->member_id($this->input->post('username')),
					'language' => ($this->user->member_language($this->input->post('username')) != null) ? $this->user->member_language($this->input->post('username')) : 'english'
	 				);
	 		$this->session->set_userdata($data);
	 		redirect('admin/post');
	 	}
	 	else
	 	{
	 		$data['posts'] = $this->m_post->get_posts(5, $start);
	 		$data['error'] = 'Username atau Password Salah!';
	     	$data['main_content'] = 'login_form';
	 		$data['main_content'] = 'backend/login_form';
	 		$this->load->view('includes/t_frontend', $data);
	 	}
	}

	function logout()
	{
	    $this->session->sess_destroy();
	    $this->index();
	}



}

?>
