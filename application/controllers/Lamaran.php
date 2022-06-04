<?php
class Lamaran extends CI_Controller
{
	function __construct(){
        parent::__construct();
		$this->load->model('M_Lamaran', 'model');
    }

	public function index($id){
		if($this->session->userdata('role') == 'alumni') {
			$data['lamaran'] = $this->model->index($id,'lamaran')->result();
			$this->load->view('clients/layouts/header.php');
			$this->load->view('lamaran/index.php',$data);
			$this->load->view('clients/layouts/footer.php');
		}
		else{
			redirect ('auth/index');
		}
	}
	public function detail($id){
		if($this->session->userdata('role') == 'alumni') {
			$data['lowongan'] = $this->db
			->join('lowongan','lowongan.id_lowongan=lamaran.id_lowongan')
			->join('perusahaan','perusahaan.id_perusahaan=lowongan.id_perusahaan')
			->where('lamaran.id_lowongan',$id)
			->get('lamaran')->row();
			if ($data['lowongan']) {
				$this->load->view('clients/layouts/header.php');
				$this->load->view('lamaran/detail.php',$data);
				$this->load->view('clients/layouts/footer.php');
			}else{
				redirect('lamaran/index/'.$id);
			}
		}
		else{
			redirect ('auth/index');
		}
	}
	public function simpan(){
		$config['upload_path'] = './file/cv';
			$config['allowed_types'] = 'jpg|png|jpeg|pdf';
			$config['max_size'] = 3000;
			$config['file_name'] = date('y-m-d:h:m:s').$_FILES['cv']['name']; 

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('cv')) {
				$error = array('error' => $this->upload->display_errors());
				var_dump($error);

			} else {
				$data = [
				'id_lowongan' => $this->input->post('lowongan'),
				'id_alumni' => $this->input->post('alumni'),
				'keterangan_kandidat' => $this->input->post('isi_lamaran'),
				'hasil' => 'Sedang direview perusahaan',
				'cv' => $config['file_name'],
				];
				$this->model->save_lamaran('lamaran', $data);

				array('image_metadata' => $this->upload->data());
				redirect('homepage/lowongan_detail/'.$this->input->post('lowongan'));
			}
	}
}
