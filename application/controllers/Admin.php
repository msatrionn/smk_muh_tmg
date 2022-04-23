<?php
class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('M_Alumni', 'model');
	}
	public function index(){
		$this->load->view('layouts/head_admin.php');
		$this->load->view('admin/index');
		$this->load->view('layouts/foot.php');
		
	}

}
