<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Requestcontroller extends CI_Controller {
	public function showform()
	{
		$this->load->view('requestform');
	}
	public function sendletter()
	{
		$data = array(
            'Date'		=>  $this->input->post('Date'),
            'Subject'	=>  $this->input->post('Subject'),
            'Content'	=>  $this->input->post('Content'),
			'Status'	=> 'Waiting'
			);
		$this->dbletter->addletter($data);
		echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
		//redirect(base_url('index.php/requestcontroller/showform/'));
	}
	public function editrequest($letternumber)
	{
		$data['edit'] = $this->dbletter->editletter($letternumber);
		$this->load->view('editrequest', $data);
	}
	public function set_edit($id)
	{
		$id 				= $this->input->post('LetterNumber');
		$data['Date']		= $this->input->post('Date');
		$data['Subject']	= $this->input->post('Subject');
		$data['Content']	= $this->input->post('Content');
		$data['Status']		= $this->input->post('Status');
		$data['StudentID']	= $this->input->post('StudentID');
		$this->dbletter->set_edit ($id, $data);
		redirect (base_url('index.php/historycontroller/showhistory'));
	}
	public function deleterequest($letternumber)
	{
		$this->dbletter->delete($letternumber);
		redirect (base_url ('index.php/historycontroller/showhistory'));
	}
}