<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends Akademik {

	public $data = array();

	public function __construct()
	{
		parent::__construct();
		$this->page_title->push('Dashboard', 'Halaman Utama');
	}

	public function index()
	{
		$this->data = array(
			'title' => "Dashboard", 
			'breadcrumb' => $this->breadcrumbs->show(),
			'page_title' => $this->page_title->show(),
			'js' => $this->load->get_js_files(),	
		);

		$this->template->view('dashboard', $this->data);
	}

}

/* End of file Main.php */
/* Location: ./application/modules/Akademik/controllers/Main.php */