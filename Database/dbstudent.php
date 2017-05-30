<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dbstudent extends CI_Model {

	/* query to show data from table testable*/
	public function checkstudent($user, $pass)
	{
		/*$query = $this->db->get('testable');*/
		$this->db->select('*');
		$this->db->from('student');
		$this->db->where('StudentID', $user);
		$this->db->where('Password', md5($pass));

		$users = $this->db->get()->num_rows();
		return $users;
	}

	public function showprofile($id)
	{
		$tp = $this->db->select('*')->from('student')->where('StudentID', $id);
		return $tp->get();
	}

	public function editprofile($id)
	{
		$tp = $this->db->select('*')->from('student')->where('StudentID', $id);
		return $tp->get();
	}
	
	public function set_edit($id, $data)
	{
		$this->db->where('StudentID', $id)->update('student', $data);
	}

	public function setpassword($id, $data)
	{
		$this->db->where('StudentID', $id)->update('student', $data);
	}
}

