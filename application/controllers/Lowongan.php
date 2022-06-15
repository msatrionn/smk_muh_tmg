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
		$this->load->view('layouts/head_admin.php');
		$this->load->view('perusahaan/create.php');
		$this->load->view('layouts/foot.php');
	}
	public function save(){
		$config['upload_path'] = './file/perusahaan';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 3000;
		$config['file_name'] = date('y-m-d:h:m:s').$_FILES['foto_perusahaan']['name']; 

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto_perusahaan')) {
            $error = array('error' => $this->upload->display_errors());

        } else {
			$data = [
			'nama_perusahaan' => $this->input->post('nama'),
			'alamat_perusahaan' => $this->input->post('alamat'),
			'no_telp_perusahaan' => $this->input->post('no_telp'),
			'foto_perusahaan' => $config['file_name'],
			];
			$this->model->save_post_data('perusahaan', $data);

            array('image_metadata' => $this->upload->data());
			redirect('perusahaan/index');
        }
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
