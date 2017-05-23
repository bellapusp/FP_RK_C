<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profilecontroller extends CI_Controller {

	public function showprofile()
	{
		$this->load->view('profileui');
	}

	public function editaccount()
	{
		$this->load->view('editaccountform');
	}

	public function changepassword()
	{
		$this->load->view('changepasswordform');
	}
}
