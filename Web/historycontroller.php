<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Historycontroller extends CI_Controller {

	public function showhistory()
	{
		$this->load->model('dbletter');
		$data['letter'] = $this->dbletter->loadletter();
		$data['deleted'] = $this->dbletter->loaddeleted();
		$this->load->view('historyui', $data);
	}

}
