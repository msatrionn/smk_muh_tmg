<?php
class Struktur extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Struktur', 'model');
		
	}

	public function index(){
		if ($this->session->userdata('role') == 'admin') {
		$data['struktur']=$this->model->get_struktur();
		$this->load->view('layouts/head_admin.php');
		$this->load->view('admin/struktur/index.php',$data);
		$this->load->view('layouts/foot.php');
		}
		else{
			$this->load->view('404.php');
		}
	}
	public function tambah_struktur(){
		$this->load->view('layouts/head_admin.php');
		$this->load->view('admin/struktur/create.php');
		$this->load->view('layouts/foot.php');
	}
	public function save(){
		if ($this->session->userdata('role') == 'admin') {
			$data = [
				'pengurus' => $this->input->post('pengurus'),
				'jabatan' => $this->input->post('jabatan'),
				];
			$data['struktur']=$this->model->save_struktur_data('struktur',$data);
			redirect('struktur/index');

		}
		else{
			$this->load->view('404.php');
		}
	}
	public function edit_struktur($id){
		if ($this->session->userdata('role') == 'admin') {
			$data['struktur']=$this->model->get_struktur_edit($id);
			$this->load->view('layouts/head_admin.php');
			$this->load->view('admin/struktur/edit',$data);
			$this->load->view('layouts/foot.php');
		}
		else{
			$this->load->view('404.php');
		}
	}
	public function update_struktur(){
		$id= $this->input->post('id');
		if ($this->session->userdata('role') == 'admin') {
		$data = [
			'pengurus' => $this->input->post('pengurus'),
			'jabatan' => $this->input->post('jabatan'),
			];
		$this->model->updated_data($id, 'struktur', $data);
		redirect('struktur/index');
		}
		else{
			$this->load->view('404.php');
		}
	}
	public function deleted_struktur($id){
		if ($this->session->userdata('role') == 'admin') {
		$this->model->deleted_data($id,'struktur');
		redirect('struktur/index');

	}
	else{
		$this->load->view('404.php');
	}
	}


}
