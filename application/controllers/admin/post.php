<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class post extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
		$this->load->model('m_post');
	}
	function index(){
		$this->load->helper('language');
		$this->lang->load('dashboard', $this->session->userdata('language'));
		$data['posts'] = $this->m_post->get_posts();
		$data['main_content'] = 'backend/post/index';
		$data['title'] = 'Postingan';
		$this->load->view('includes/template', $data);

	}

	function post($post_id)
	{
			$data['post'] = $this->m_post->get_post($post_id);
	}



	function new_post()
	{

	$data = array('post_title' => $this->input->post('post_title'), 'konten' => $this->input->post('konten'));
	$this->m_post->insert_post($data);
	redirect(base_url() . 'index.php/admin/post');
}

	private function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');

		if (!isset($is_logged_in) || $is_logged_in != true) {
			echo 'login please';
			die();
		}
	}

	function tambah(){
		$data['title'] = 'Buat Postingan';
		$data['main_content'] = 'backend/post/add_post';
		$this->load->view('includes/template', $data);
	}



	function hapus($post_id)
    {
        $this->m_post->delete_post($post_id);
        redirect('admin/post', 'refresh');
    }

	function ubah($post_id){
		$data['title'] = 'Edit Postingan';
		$data['post'] = $this->m_post->get_post($post_id);
		$data['main_content'] = 'backend/post/edit_post';
		$this->load->view('includes/template', $data);
	}

	function update($post_id)
    {
    	$data = $_POST;
    	$this->m_post->update_post($post_id, $data);
    	redirect(base_url() . 'index.php/admin/post');
    }
}

?>
