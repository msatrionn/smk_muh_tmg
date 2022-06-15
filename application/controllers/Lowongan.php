<?php
class Lowongan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Lowongan', 'model');
	}
	public function index($id){
		if($this->session->userdata('role') == 'perusahaan') {
			$data['lowongan'] = $this->model->index($id,'lowongan')->result();
			$this->load->view('clients/layouts/header.php');
			$this->load->view('lowongan/index.php', $data);
			$this->load->view('clients/layouts/footer.php');
		}
		else{
			redirect ('auth/index');
		}
	}

	public function create_view(){
		$id=$this->session->userdata('id_user');
		$data['getuser']=$this->model->get_user($id,"perusahaan")->row()->id_perusahaan;
		$this->load->view('clients/layouts/header.php');
		$this->load->view('lowongan/create.php',$data);
		$this->load->view('clients/layouts/footer.php');

	}
	public function save(){
		$id_perusahaan=$this->input->post('id_perusahaan');
		$data=[
			'judul'=>$this->input->post('judul'),
			'id_perusahaan'=>$id_perusahaan,
			'deskripsi'=>$this->input->post('deskripsi'),
		];
		$this->model->save_post_data('lowongan',$data);
		redirect('lowongan/index/'.$id_perusahaan);
	}

	public function edit_view($id){
		$data['lowongan']=$this->model->get_lowongan_edit($id);
		$this->load->view('clients/layouts/header.php');
		$this->load->view('lowongan/edit.php', $data);
		$this->load->view('clients/layouts/footer.php');
	}

	public function update(){
		$id=$this->input->post('id');
		$id_perusahaan=$this->input->post('id_perusahaan');
		$data=[
			'judul'=>$this->input->post('judul'),
			'deskripsi'=>$this->input->post('deskripsi'),
		];
		$this->model->updated_data($id,'lowongan',$data);
		redirect('lowongan/index/'.$id_perusahaan);

	}
	public function deleted_data($id){
		$data['post']=$this->model->get_perusahaan_edit($id);
		if(file_exists($lok=FCPATH.'/file/perusahaan/'.$data['post']->foto_perusahaan)){
			unlink(FCPATH.'/file/perusahaan/'.$data['post']->foto_perusahaan);
			$this->model->deleted_data($id,'perusahaan');
		}

		else{
			$this->model->deleted_data($id,'perusahaan');
			
		}
		return redirect('perusahaan/index/'.$id);
	}
}
