<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dbletter extends CI_Model {

	/* query to show data from table testable*/
	public function loadletter()
	{
		/*$query = $this->db->get('testable');*/
		$this->db->SELECT();
		$data = $this->db->get('letter');
		return $data->result();
	}
	public function loaddeleted()
	{
		/*$query = $this->db->get('testable');*/
		$this->db->SELECT();
		$data = $this->db->get('canceled_letter');
		return $data->result();
	}
	public function addletter($data)
	{
		$this->db->insert('letter', $data);
	}
	public function editletter($id)
	{
		$tp = $this->db->select('*')->from('letter')->where('LetterNumber', $id);
		return $tp->get();
	}
	public function set_edit($id, $data)
	{
		$this->db->where('LetterNumber', $id)->update('letter', $data);
	}
	public function delete($id)
	{

		$this->db->query("INSERT INTO canceled_letter(LetterNumber, Date, Subject, Content, Status, StudentID)
						  SELECT LetterNumber, Date, Subject, Content, Status, StudentID
						  from letter
						  WHERE LetterNumber = $id");
		$this->db->set('Status', 'Deleted');
		$this->db->where('LetterNumber', $id);
		$this->db->update('canceled_letter');

		$this->db->where('LetterNumber', $id)->delete('letter');
	}
	public function setstatus($id)
	{
		$this->db->set('Status','Accepted');
		$this->db->where('LetterNumber', $id);
		$this->db->update('letter');
	}
	public function notification($studentId)
	{
		$query = $this->db->query("SELECT LetterNumber, Subject
						  from letter
						  WHERE Status = 'Accepted' and StudentID = '".$studentId."'");
		return $query->result_array();
	}
	public function check_notif($student){
		$query = $this->db->query("SELECT student_notif from student where StudentID=$student");
		$query = $query->result();
		return $query[0]->student_notif;
	}
	public function del_notif($student){
		$this->db->query("UPDATE student set student_notif = 0 WHERE StudentID = $student");	
	}
}