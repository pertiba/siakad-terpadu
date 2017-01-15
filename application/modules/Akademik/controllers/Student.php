<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends Akademik 
{
	public function __construct()
	{
		parent::__construct();

		$this->load->helper(array('akademik'));

		$this->semester = $this->input->get('semester');

		$this->load->model('mstudent', 'student');

		$this->breadcrumbs->unshift(1, 'Mahasiswa', "akademik/student");

		$this->load->js(base_url("assets/app/akademik/student.js"));
	}

	public function index()
	{
		$this->page_title->push('Mahasiswa', 'Data Mahasiswa');

		$field = array(
			$this->input->get('per_page'),
			$this->input->get('class'),
			$this->input->get('gender'),
			$this->input->get('registration'),
			$this->input->get('query')
		);

		// set pagination
		$config = $this->template->pagination_list();

		$config['base_url'] = site_url(
			"akademik/student?per_page={$field[0]}&class={$field[1]}&gender={$field[2]}&registration={$field[3]}&query={$field[4]}"
		);

		$config['per_page'] = (!$this->input->get('per_page')) ? 20 : $this->input->get('per_page');
		$config['total_rows'] = $this->student->getall(null, null, 'num');

		$this->pagination->initialize($config);

		$this->data = array(
			'title' => "Data Mahasiswa", 
			'breadcrumb' => $this->breadcrumbs->show(),
			'page_title' => $this->page_title->show(),
			'js' => $this->load->get_js_files(),
			'data_mahasiswa' => $this->student->getall($config['per_page'], $this->input->get('page')) ,
			'jumlah_mahasiswa' => $this->student->getall(null, null, 'num')
		);

		$this->template->view('student/data-mahasiswa', $this->data);
	}

	public function add()
	{
		$this->page_title->push('Mahasiswa', 'Tambah data Mahasiswa');

		$this->breadcrumbs->unshift(2, 'Tambah Data', "akademik/student/add");

		$this->data = array(
			'title' => "Tambah data Mahasiswa", 
			'breadcrumb' => $this->breadcrumbs->show(),
			'page_title' => $this->page_title->show(),
			'js' => $this->load->get_js_files(),
		);

		$this->template->view('student/add-mahasiswa', $this->data);
	}

	/**
	 * Handle Create Mahasiswa
	 *
	 * @return string
	 **/
	public function create()
	{
		$this->student->create();

		redirect('akademik/student/add');
	}

}

/* End of file Student.php */
/* Location: ./application/modules/Akademik/controllers/Student.php */