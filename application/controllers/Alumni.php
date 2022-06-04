<?php
class Alumni extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Alumni', 'model');
	}
	public function index(){
		if($this->session->userdata('role') == 'alumni') {
			$data['alumni'] = $this->model->index('alumni')->row();
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
		$this->load->view('alumni/create.php');
		$this->load->view('layouts/foot.php');
	}
	public function save(){
		$config['upload_path'] = './file/alumni';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 3000;
		$config['file_name'] = date('y-m-d:h:m:s').$_FILES['foto_alumni']['name']; 

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto_alumni')) {
            $error = array('error' => $this->upload->display_errors());
			var_dump($error);

        } else {
			$data = [
			'nama_alumni' => $this->input->post('nama'),
			'alamat_alumni' => $this->input->post('alamat'),
			'no_hp' => $this->input->post('no_hp'),
			'foto_alumni' => $config['file_name'],
			];
			$this->model->save_post_data('alumni', $data);

            array('image_metadata' => $this->upload->data());
			redirect('alumni/index');
        }
	}

	public function edit_view($id){
		$data['alumni']=$this->model->get_alumni_edit($id);
		$this->load->view('clients/layouts/header.php');
		$this->load->view('clients/edit_profil.php', $data);
		$this->load->view('clients/layouts/footer.php');
	}

	public function update(){
		$id=$this->input->post('id');
		$config['upload_path'] = './file/alumni';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 3000;
		$config['file_name'] = date('y-m-d:h:m:s').$_FILES['foto_alumni']['name']; 
		$data['alumni']=$this->model->get_alumni_edit($id);
		if ($_FILES['foto_alumni']['name']) {
			$config['upload_path'] = './file/alumni';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = 3000;
			$config['file_name'] = date('y-m-d:h:m:s').$_FILES['foto_alumni']['name']; 
			$this->load->library('upload', $config);

			if(file_exists(FCPATH.'/file/alumni/'.$data['alumni']->foto_alumni)){
				unlink(FCPATH.'/file/alumni/'.$data['alumni']->foto_alumni);
				if (!$this->upload->do_upload('foto_alumni')) {
					$error = array('error' => $this->upload->display_errors());

					// redirect('post/index',$error);
				} else {
					
					$data = [
						'nama_alumni' => $this->input->post('nama'),
						'alamat_alumni' => $this->input->post('alamat'),
						'no_hp' => $this->input->post('no_hp'),
						'foto_alumni' => $config['file_name'],
					];
					
					array('image_metadata' => $this->upload->data());
					$this->model->updated_data($id, 'alumni', $data);
				}

			}
			else{
				$config['upload_path'] = './file/alumni/';
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size'] = 3000;
				$config['file_name'] = date('y-m-d:h:m:s').$_FILES['foto_alumni']['name']; 
				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('foto_alumni')) {
					$error = array('error' => $this->upload->display_errors());
					var_dump($error);
				} else {
					
					$data = [
						'nama_alumni' => $this->input->post('nama'),
						'alamat_alumni' => $this->input->post('alamat'),
						'no_hp' => $this->input->post('no_hp'),
						'foto_alumni' => $config['file_name'],
					];
					
					array('image_metadata' => $this->upload->data());
					$this->model->updated_data($id, 'alumni', $data);

				}
				 

			}
			
		}
		else{
			$data = [
				'nama_alumni' => $this->input->post('nama'),
				'alamat_alumni' => $this->input->post('alamat'),
				'no_hp' => $this->input->post('no_hp'),
			];
			$this->model->updated_data($id, 'alumni', $data);
			
		}
		redirect('alumni/index');

	}
	public function deleted_data($id){
		$data['post']=$this->model->get_alumni_edit($id);
		if(file_exists($lok=FCPATH.'/file/alumni/'.$data['post']->foto_alumni)){
			unlink(FCPATH.'/file/alumni/'.$data['post']->foto_alumni);
			$this->model->deleted_data($id,'alumni');
		}

		else{
			$this->model->deleted_data($id,'alumni');
			
		}
		return redirect('alumni/index');
	}
}
