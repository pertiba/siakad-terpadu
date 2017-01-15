<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maccount extends CI_Model {

	public function getAll($param = 0)
	{
		$query = $this->db->query(
			"SELECT students.*, students_origin_school.*, students_parent.*, concentration.* FROM students
			LEFT JOIN students_origin_school ON students.student_id = students_origin_school.school_student_id
			LEFT JOIN students_parent ON students.student_id = students_parent.student_id
			LEFT JOIN concentration ON students.concentration_id = concentration.concentration_id
			WHERE students.student_id = ?", $param
		);

		return $query->row();
	}

	public function get($param = 0)
	{
		$query = $this->db->query("SELECT * FROM students_accounts WHERE account_student_id = ?", $param);

		return $query->row();
	}

	public function update($param = 0)
	{
		$new_pass = password_hash($this->input->post('new_pass'), PASSWORD_DEFAULT);

		if(password_verify($this->input->post('old_pass'), $this->session->has_userdata('password') ))
		{
			if(!$this->input->post('new_pass'))
			{
				$query = $this->db->query("UPDATE students_accounts SET email = ? WHERE account_student_id = ?", array($this->input->post('email'), $param));
			} else {
				$query = $this->db->query(
					"UPDATE students_accounts SET email = ? , password = ? WHERE account_student_id = ?", 
					array($this->input->post('email'), $password, $param)
				);
			}
		} else {
			$this->template->alert(
				' Gagal melakukan perubahan, password yang anda masukkan salah.', 
				array('type' => 'warning','icon' => 'times')
			);	
		}

		if($this->db->affected_rows())
		{
			$this->template->alert(
				' Perubahan tersimpan.', 
				array('type' => 'success','icon' => 'check')
			);
		} else {
			$this->template->alert(
				' Gagal melakukan perubahan.', 
				array('type' => 'warning','icon' => 'times')
			);
		}
	}

}

/* End of file Maccount.php */
/* Location: ./application/modules/Mahasiswa/models/Maccount.php */