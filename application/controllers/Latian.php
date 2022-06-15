<?php
class Latian extends CI_Controller
{
	function __construct(){
        parent::__construct();
		$this->load->model('M_Lamaran', 'model');
    }

	public function index(){
		$data['datadiri']=$this->db->get("datadiri")->result();
		$this->load->view('clients/layouts/header.php');
		$this->load->view('latian/index.php',$data);
		$this->load->view('clients/layouts/footer.php');
	}
	public function create(){
		$this->load->view('clients/layouts/header.php');
		$this->load->view('latian/create.php');
		$this->load->view('clients/layouts/footer.php');
	}
	public function save(){
		$data = [
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'no_telp' => $this->input->post('no_hp'),
			];
		$this->db->insert("datadiri", $data);
		redirect('latian/index');
	}
}
