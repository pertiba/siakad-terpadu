<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mstudent extends CI_Model {

	public function getall($limit = 20, $offset = 0, $type = 'result')
	{
		$this->db->select('student_id, npm, name, gender, place_of_birts, birts, address, religion, study, concentration_name, ladder, class, register_year, active');

		$this->db->join('concentration', 'students.concentration_id = concentration.concentration_id', 'left');

		if($this->input->get('class') != '')
			$this->db->where('class', $this->input->get('class'));

		if($this->input->get('gender') != '')
			$this->db->where('gender', $this->input->get('gender'));

		if($this->input->get('registration') != '')
			$this->db->where('register_year', $this->input->get('registration'));

		if($this->input->get('query') != '')
			$this->db->like('npm', $this->input->get('query'))
					 ->or_like('name', $this->input->get('query'))
					 ->or_like('address', $this->input->get('query'));

		$this->db->order_by('student_id', 'desc');

		if($type == 'result')
		{
			return $this->db->get('students', $limit, $offset)->result();
		} else {
			return $this->db->get('students')->num_rows();
		}
	}

	/**
	 * Handle reate Mahasiswwa Model
	 *
	 * @var string
	 **/
	public function create()
	{
		$mahasiswa = array(
			'npm' => $this->input->post('npm'), 
			'name' => $this->input->post('name'),
			'gender' => $this->input->post('gender'),
			'place_of_birts' => $this->input->post('place_of_birts'),
			'birts' => $this->input->post('birts'),
			'city_id' => 0,
			'province_id' => 0,
			'address' => $this->input->post('address'),
			'photo' => '',
			'religion' => $this->input->post('religion'),
			'jobs' => $this->input->post('jobs'),
			'study' => $this->input->post('study'),
			'concentration_id' => $this->input->post('concentration'),
			'ladder' => $this->input->post('ladder'),
			'class' => $this->input->post('class'),
			'register_year' => $this->input->post('register_year'),
			'active' => 1
		);

		$this->db->insert('students', $mahasiswa);

		$student_id = $this->db->insert_id();

		$parents = array(
			'student_id' => $student_id,
			'father_name' => $this->input->post('father_name'),
			'mother_name' => $this->input->post('mother_name'),
			'parent_address' => $this->input->post('parent_address'),
			'city_id' => 0,
			'province_id' => 0,
			'phone_number' => $this->input->post('phone_number'),
			'father_jobs' => $this->input->post('father_jobs'),
			'mother_jobs' => $this->input->post('mother_jobs'),
			'revenue' => $this->input->post('revenue')
		);

		$this->db->insert('students_parent', $parents);

		$school = array(
			'school_student_id' => $student_id,
			'school_name' => $this->input->post('school_name'),
			'school_study' => $this->input->post('school_study'),
			'school_address' => $this->input->post('school_address'),
			'school_city_id' => 0,
			'school_province_id' => 0,
			'certificate_number' => $this->input->post('certificate_number'),
			'graduation_year' => $this->input->post('graduation_year'),
			'grade_value' => $this->input->post('grade_value')
		);

		$this->db->insert('students_origin_school', $school);

		$account = array(
			'account_student_id' => $student_id,
			'email' => '',
			'password' => password_hash($this->input->post('birts'), PASSWORD_DEFAULT),
			'forgot_key' => 0
		);
		$this->db->insert('students_accounts', $account);

		if($this->db->affected_rows())
		{
			$this->template->alert(
				' Data Mahasiswwa ditambahkan.', 
				array('type' => 'success','icon' => 'check')
			);
		} else {
			$this->template->alert(
				' Gagal menyimpan data.', 
				array('type' => 'warning','icon' => 'times')
			);
		}
	}

}

/* End of file Mstudent.php */
/* Location: ./application/modules/Akademik/models/Mstudent.php */