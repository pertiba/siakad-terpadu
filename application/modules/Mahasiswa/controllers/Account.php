<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends Mahasiswa 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('form_validation'));
	}

	public function index()
	{
		$this->breadcrumbs->unshift(1, 'Akun', 'front/account');
		$this->breadcrumbs->unshift(1, 'Profil', 'about');
		$this->page_title->push('Akun', 'profil');

		$this->data = array(
			'title' => 'Profil',
			'breadcrumb' => $this->breadcrumbs->show(),
			'page_title' => $this->page_title->show(),
			'js' => $this->load->get_js_files(),
			'get' => $this->account->getAll($this->session->has_userdata('account_id'))
		);

		$this->template->view('account/index', $this->data);
	}

	/**
	 * Get Setting Page
	 *
	 * @return Setting Page
	 **/
	public function setting()
	{
		$this->breadcrumbs->unshift(1, 'Akun', 'front/account');
		$this->breadcrumbs->unshift(2, 'Profil', 'about');
		$this->page_title->push('Akun', 'Pengaturan Login');

		$this->form_validation->set_rules('email', 'E-Mail', 'trim');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('new_pass', 'Password Baru', 'trim|min_length[8]|max_length[12]');
		$this->form_validation->set_rules('repeat_pass', 'Ini', 'trim|matches[new_pass]');
		$this->form_validation->set_rules('old_pass', 'Password Lama', 'trim|required');

        if ($this->form_validation->run() == TRUE)
        {
        	$this->account->update($this->session->has_userdata('account_id'));
        }

		$this->data = array(
			'title' => 'Pengaturan Login',
			'breadcrumb' => $this->breadcrumbs->show(),
			'page_title' => $this->page_title->show(),
			'js' => $this->load->get_js_files(),	
			'get' => $this->account->get($this->session->has_userdata('account_id'))
		);

		$this->template->view('account/setting', $this->data);
	}
}

/* End of file Account.php */
/* Location: ./application/modules/Mahasiswa/controllers/Account.php */