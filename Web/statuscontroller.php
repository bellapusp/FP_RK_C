<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statuscontroller extends CI_Controller {

	public function accept($id)
	{
		$this->dbletter->setstatus($id);
		redirect(base_url('index.php/home/admin/'));
	}
}
