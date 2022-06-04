<?php
class Post extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Post', 'model');
		
		// $this->load->library('upload');
	}
	public function index(){
		if ($this->session->userdata('role') == 'admin') {
			$data['post']=$this->model->get_post();
			$this->load->view('layouts/head_admin.php');
			$this->load->view('admin/berita/index',$data);
			$this->load->view('layouts/foot.php');
		}
		else{
			$this->load->view('404.php');
			
		}
	}
	public function create_view(){
		if ($this->session->userdata('role') == 'admin') {
			$this->load->view('layouts/head_admin.php');
			$this->load->view('admin/berita/create');
			$this->load->view('layouts/foot.php');
		}
		else{
			$this->load->view('404.php');
			
		}
		
	}
	public function edit_view($id){
		if ($this->session->userdata('role') == 'admin') {
			$data['post']=$this->model->get_post_edit($id);
			$this->load->view('layouts/head_admin.php');
			$this->load->view('admin/berita/edit',$data);
			$this->load->view('layouts/foot.php');
		}
		else{
			$this->load->view('404.php');
		}
	
	}

	public function save(){
		if ($this->session->userdata('role') == 'admin') {
			$config['upload_path'] = './file/news';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = 3000;
			$config['file_name'] = date('y-m-d:h:m:s').$_FILES['foto_post']['name']; 

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('foto_post')) {
				$error = array('error' => $this->upload->display_errors());
				var_dump($error);

			} else {
				$data = [
				'judul' => $this->input->post('judul'),
				'deskripsi' => $this->input->post('deskripsi'),
				'foto' => $config['file_name'],
				];
				$this->model->save_post_data('berita', $data);

				array('image_metadata' => $this->upload->data());
				redirect('post/index');
			}
		}
		else{
			$this->load->view('404.php');
		}
		
	}
	public function update_post(){
		if ($this->session->userdata('role') == 'admin') {
			$id=$this->input->post('id');
			$config['upload_path'] = './file/news';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = 3000;
			$config['file_name'] = date('y-m-d:h:m:s').$_FILES['foto_post']['name']; 
			$data['post']=$this->model->get_post_edit($id);
			if ($_FILES['foto_post']['name']) {
				$config['upload_path'] = './file/news';
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size'] = 3000;
				$config['file_name'] = date('y-m-d:h:m:s').$_FILES['foto_post']['name']; 
				$this->load->library('upload', $config);
	
				if(file_exists(FCPATH.'/file/news/'.$data['post']->foto)){
					unlink(FCPATH.'/file/news/'.$data['post']->foto);
					if (!$this->upload->do_upload('foto_post')) {
						$error = array('error' => $this->upload->display_errors());
	
						// redirect('post/index',$error);
					} else {
						
						$data = [
							'judul' => $this->input->post('judul'),
							'deskripsi' => $this->input->post('deskripsi'),
							'foto' => $config['file_name'],
						];
						
						array('image_metadata' => $this->upload->data());
						$this->model->updated_data($id, 'berita', $data);
					}
					// return redirect('post/index');
	
				}
				else{
					$config['upload_path'] = './file/news/';
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = 3000;
					$config['file_name'] = date('y-m-d:h:m:s').$_FILES['foto_post']['name']; 
					$this->load->library('upload', $config);
	
					if (!$this->upload->do_upload('foto_post')) {
						$error = array('error' => $this->upload->display_errors());
						var_dump($error);
					} else {
						
						$data = [
							'judul' => $this->input->post('judul'),
							'deskripsi' => $this->input->post('deskripsi'),
							'foto' => $config['file_name'],
						];
						
						array('image_metadata' => $this->upload->data());
						$this->model->updated_data($id, 'berita', $data);
					// return redirect('post/index');
	
					}
					 
	
					// return redirect('post/index');
				}
				
			}
			else{
				$data = [
					'judul' => $this->input->post('judul'),
					'deskripsi' => $this->input->post('deskripsi'),
				];
				$this->model->updated_data($id, 'berita', $data);
				
			}
			redirect('post/index');
		}
		else{
			$this->load->view('404.php');
			
		}
	}
	public function delete_post($id){
		if ($this->session->userdata('role') == 'admin') {
			$data['post']=$this->model->get_post_edit($id);
			if(file_exists($lok=FCPATH.'/file/news/'.$data['post']->foto)){
				unlink(FCPATH.'/file/news/'.$data['post']->foto);
				$this->model->deleted_data($id,'berita');
			}
	
			else{
				echo 'false';
				$this->model->deleted_data($id,'berita');
				
			}
			return redirect('post/index');
		}
		else{
			$this->load->view('404.php');
		}
	
	}
}
