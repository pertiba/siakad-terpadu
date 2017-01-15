<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class MY_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

	}
}


/**
 * undocumented class
 *
 * @package default
 * @author 
 **/
class Mahasiswa extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('template','breadcrumbs','page_title','config','table','user_agent'));

		$this->load->model('maccount', 'account');

		$this->load->helper(array('menus','date'));
		
		date_default_timezone_set('Asia/Jakarta');

		$this->breadcrumbs->unshift(0, 'Home', 'mahasiswa/main');

		if($this->session->has_userdata('is_login')==FALSE)
			redirect('mahasiswa/login?from_url='.current_url());

	}
}

/**
 * undocumented class
 *
 * @package default
 * @author 
 **/
class Akademik extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('template','breadcrumbs','page_title','config','table','user_agent'));

		$this->load->helper(array('menus','date'));

		$this->load->model(array('krs_callback'));

		$this->load->js("assets/app/akademik/main.js");

		date_default_timezone_set('Asia/Jakarta');

		$this->breadcrumbs->unshift(0, 'Dashboard', 'akademik/main');

		if($this->session->has_userdata('admin_login')==FALSE)
			redirect('akademik/login?from_url='.current_url());
	}
}




/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */