<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}

	public function main()
	{
		$this->load->view('header');
		$this->load->view('main');
		$this->load->view('footer');
	}


	public function login()
	{
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}


public function registration()
	{
		$this->load->view('header');
		$this->load->view('registration');
		$this->load->view('footer');
	}


	public function institution()
	{
		$this->load->view('header');
		$this->load->view('institution_profile');
		$this->load->view('footer');
	}

	public function teacher()
	{
		$this->load->view('header');
		$this->load->view('teacher_profile');
		$this->load->view('footer');
	}

	public function teacher_registration()
	{
		 $this->load->helper('form');
		 $this->load->helper('url');
		 $this->load->helper('file');
		 $this->load->view('header');
		$this->load->view('teacher_registration');
		  $this->load->view('footer');
	}


public function test_test()
	{
		 
		$this->load->view('test');
		 
	}


	 
}
