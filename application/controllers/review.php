<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Review extends CI_Controller {
    function __construct()
	{
		parent::__construct();
        $this->load->helper('language');
		$this->lang->load('bookings', $this->session->userdata('language'));
		$this->load->model('tour');
		$this->load->model('user');
    $this->load->model('m_post');
	}

	function index($start = 0)
	{
	$data['posts'] = $this->m_post->get_posts(5, $start);

     $this->load->library('pagination');
     $config['base_url'] = base_url() . 'index.php/index/index/';//url to set pagination
     $config['total_rows'] = $this->m_post->get_post_count();
     $config['per_page'] = 5;
     $this->pagination->initialize($config);
     $data['pages'] = $this->pagination->create_links(); //Links of pages

	   $data['tours'] = $this->tour->show_tours();
	   $data['users'] = $this->user->show_users();
	   $data['company_info'] = $this->tour->get_company_info();
	   $data['main_content'] = 'frontend/review';
	   $this->load->view('includes/t_frontend', $data);
	}

	function postingan($post_id)
    {
    	$data['posts'] = $this->m_post->get_posts(5, 0);
    	$data['tours'] = $this->tour->show_tours();
	   $data['users'] = $this->user->show_users();
	   $data['company_info'] = $this->tour->get_company_info();
    	$data['main_content'] = 'frontend/single_post';
    	$data['post'] = $this->m_post->get_post($post_id);
    	$this->load->view('includes/t_frontend', $data);
    }
}

?>
