<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	

	/*login control*/
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}
	//login
	public function login()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');

		//get the numrow to check the presence of user in student table
		$check = $this->dbstudent->checkstudent($user,$pass);
		//if numrow>0 = user exists in student table
		if($check > 0)
		{
			$this->session->set_userdata('username', $user);
			if($user == 'admin')
			{
				redirect(base_url('index.php/home/admin'));
			}
			else
			{
				redirect(base_url('index.php/home/welcome'));		
			}
		}
		else
		{
			$message = "Username and/or Password incorrect.\\nTry again.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}
	//logout
	public function logout()
	{
		$this->session->unset_userdata(array('username' => ''));
		redirect(base_url(''));
	}
	


	/*load view functions*/
	public function index()
	{
		$this->load->view('login');
	}

	public function admin()
	{
		$this->load->model('dbletter');
		$data['letter'] = $this->dbletter->loadletter();
		$this->load->view('respondletter', $data);
	}

	public function welcome()
	{
		//$data['user'] = $user;
		$this->load->view('homepage');
	}
}
