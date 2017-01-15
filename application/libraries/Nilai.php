<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Sistem Penilaian Mahasiswa STIE Pertiba
 *
 * @package Core Penilaian
 * @see 
 * @author Vicky Nitinegoro <pkpvicky@gmail.com>
 **/

class Nilai
{
	/**
	 * Mahasiswa Key 
	 *
	 * @var Integer
	 **/
	private $student = 0;

	/**
	 * Semester
	 *
	 * @var string
	 **/
	private $semester = 'ganjil';

	/**
	 * Tahun Ajaran
	 *
	 * @var string
	 **/
	private $years;

	protected $ci;

	public function __construct($params)
	{
        $this->ci =& get_instance();

        $this->ci->load->helper('akademik');

        if(is_array($params))
        {
        	$this->initialize($params);
        } else {
        	show_error('Silahkan dinisiasikan properti mahasiswa, semester, dan tahun ajaran.');
        }
	}

	public function initialize($params)
	{
		foreach ($params as $key => $val)
		{
			if (property_exists($this, $key))
			{
				$this->$key = $val;
			}
		}

		return $this;
	}

	/**
	 * Get Query
	 *
	 * @access private
	 * @return Query
	 **/
	private function getQuery()
	{
		$query = $this->ci->db->query(
			"SELECT student_id, course_id, years,semester, absent, task, midterms, final, grade, point, quality FROM study_point
			WHERE student_id = ? AND years = ? AND semester = ?",
		array($this->student, $this->years, $this->semester));

		return $query;
	}

	public function setFinal()
	{
		$final = array();

		foreach($this->getQuery()->result() as $row)
		{
			$final = ($row->absent * 15) / 100 + ($row->midterms * 30) / 100 + ($row->task * 10) / 100 + ($row->final * 45) / 100;

			$sks = $this->ci->db->query("SELECT sks FROM course WHERE course_id = ?", $row->course_id)->row('sks');

			$this->ci->db->update('study_point', 
				array('point' => $final, 'grade' => $this->setGrade($final), 'quality' => $this->setQuality($sks, $final) ), 
				array('course_id' => $row->course_id, 'student_id' => $this->student, 'years' => $this->years, 'semester' => $this->semester));
		}

		return $final;
	}

	private function setGrade($final = 0)
	{
		if($final >= 80)
			return 'A';
		elseif ($final >= 70)
			return 'B';
		elseif ($final >= 60)
			return 'C';
		elseif ($final >= 40)
			return 'D';
		else
			return 'E';
		
	}

	private function setQuality($sks = 0, $final = 0)
	{
		if($this->setGrade($final) == 'A')
			return ($sks * 4);
		elseif ($this->setGrade($final) == 'B')
			return ($sks * 3);
		elseif ($this->setGrade($final) == 'C')
			return ($sks * 2);
		elseif ($this->setGrade($final) == 'D')
			return ($sks * 1);
		else
			return ($sks * 0);
	}

	private function _sum($field = 'sks')
	{
		$query = $this->ci->db->query(
			"SELECT SUM({$field}) as {$field} FROM course JOIN study_point ON course.course_id = study_point.course_id
			WHERE study_point.student_id = ? AND study_point.years = ? AND study_point.semester = ?",
		array($this->student, $this->years, $this->semester));

		return $query;
	}

	public function getSks()
	{
		$sks = 0;

		foreach ($this->_sum('sks')->result() as $row)  
			$sks = $row->sks;

		return $sks;
	}

	public function getQuality()
	{
		$quality = 0;

		foreach ($this->_sum('quality')->result() as $row) 
			$quality = $row->quality;

		return $quality;
	}

	public function getIp()
	{
		$ipk = $this->getQuality() / $this->getSks();

		$pembulatan = round($ipk, ceil($ipk));

		return substr($pembulatan, 0, 5);
	}

	private function set_years()
	{
		$year = explode('/', $this->years);

		$generate = ($year[0] -1) . '/' . ($year[1]-1);

		if($this->semester == 'ganjil')
		{
			return $generate;
		} else {
			return $this->years;
		}
	}

	public function credit_sks()
	{
		if($this->getIp() >= 3.00)
			return 24;
		elseif($this->getIp() >= 2.50)
			return 21;
		elseif($this->getIp() >= 2.00)
			return 18;
		elseif($this->getIp() >= 1.50)
			return 15;
		else 
			return 12;
	}
}

/* End of file Nilai.php */
/* Location: ./application/libraries/Nilai.php */
