<?php
class Perusahaan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Perusahaan', 'model');
	}
	// public function index(){
	// 	if($this->session->userdata('role') == 'perusahaan' ) {
	// 		$data['perusahaan'] = $this->model->index('perusahaan')->result();
	// 		$this->load->view('layouts/head_perusahaan.php');
	// 		$this->load->view('perusahaan/index.php', $data);
	// 		$this->load->view('layouts/foot.php');
	// 	}
	// 	elseif( $this->session->userdata('role') == 'admin'){
	// 		$data['perusahaan'] = $this->model->index('perusahaan')->result();
	// 		$this->load->view('layouts/head_admin.php');
	// 		$this->load->view('perusahaan/index.php', $data);
	// 		$this->load->view('layouts/foot.php');	
	// 	}
	// 	else{
	// 		$this->load->view('verifikasi.php');
	// 	}
	// }
	public function index(){
		if($this->session->userdata('role') == 'perusahaan') {
			$data['perusahaan'] = $this->model->index('perusahaan',$this->session->userdata('id_user'))->row();
			$this->load->view('clients/layouts/header.php');
			$this->load->view('clients/profil.php', $data);
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
        $config['allowed_types'] = 'jpg|png|jpeg|PNG|JPG|JPEG';
        $config['max_size'] = 3000;
		$config['file_name'] = date('y-m-d:h:m:s').$_FILES['foto_perusahaan']['name']; 

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto_perusahaan')) {
            $error = array('error' => $this->upload->display_errors());
			var_dump($error);

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
		$data['perusahaan']=$this->model->get_perusahaan_edit($id);
		$this->load->view('clients/layouts/header.php');
		$this->load->view('clients/edit_profil.php', $data);
		$this->load->view('clients/layouts/footer.php');
	}

	public function update(){
		$id=$this->input->post('id');
		$config['upload_path'] = './file/perusahaan';
        $config['allowed_types'] = 'jpg|png|jpeg|PNG|JPG|JPEG';
        $config['max_size'] = 3000;
		$config['file_name'] = date('y-m-d:h:m:s').$_FILES['foto_perusahaan']['name']; 
		$data['perusahaan']=$this->model->get_perusahaan_edit($id);
		if ($_FILES['foto_perusahaan']['name']) {
			$config['upload_path'] = './file/perusahaan';
			$config['allowed_types'] = 'jpg|png|jpeg|PNG|JPG|JPEG';
			$config['max_size'] = 30000;
			$config['file_name'] = date('y-m-d:h:m:s').$_FILES['foto_perusahaan']['name']; 
			$this->load->library('upload', $config);

			if(file_exists(FCPATH.'/file/perusahaan/'.$data['perusahaan']->foto_perusahaan)){
				unlink(FCPATH.'/file/perusahaan/'.$data['perusahaan']->foto_perusahaan);
				if (!$this->upload->do_upload('foto_perusahaan')) {
					$error = array('error' => $this->upload->display_errors());

					// redirect('post/index',$error);
				} else {
					
					$data = [
						'nama_perusahaan' => $this->input->post('nama'),
						'alamat_perusahaan' => $this->input->post('alamat'),
						'no_telp_perusahaan' => $this->input->post('no_telp'),
						'foto_perusahaan' => $config['file_name'],
					];
					
					array('image_metadata' => $this->upload->data());
					$this->model->updated_data($id, 'perusahaan', $data);
				}

			}
			else{
				$config['upload_path'] = './file/perusahaan/';
				$config['allowed_types'] = 'jpg|png|jpeg|PNG|JPG|JPEG';
				$config['max_size'] = 3000;
				$config['file_name'] = date('y-m-d:h:m:s').$_FILES['foto_perusahaan']['name']; 
				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('foto_perusahaan')) {
					$error = array('error' => $this->upload->display_errors());
					var_dump($error);
				} else {
					
					$data = [
						'nama_perusahaan' => $this->input->post('nama'),
						'alamat_perusahaan' => $this->input->post('alamat'),
						'no_telp_perusahaan' => $this->input->post('no_telp'),
						'foto_perusahaan' => $config['file_name'],
					];
					
					array('image_metadata' => $this->upload->data());
					$this->model->updated_data($id, 'perusahaan', $data);

				}
				 

			}
			
		}
		else{
			$data = [
				'nama_perusahaan' => $this->input->post('nama'),
				'alamat_perusahaan' => $this->input->post('alamat'),
				'no_telp_perusahaan' => $this->input->post('no_telp'),
			];
			$this->model->updated_data($id, 'perusahaan', $data);
			
		}
		redirect('perusahaan/index');

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
		return redirect('perusahaan/index');
	}
}
