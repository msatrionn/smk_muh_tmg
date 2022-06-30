<?php
class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('M_Alumni', 'model');
	}
	public function index(){
		if ($this->session->userdata('role') == 'admin') {
			$data['lowongan']=$this->db->query("select count(id_lowongan) as total_lowongan from lowongan")->row();
			$data['perusahaan']=$this->db->query("select count(id_perusahaan) as total_perusahaan from perusahaan")->row();
			$data['alumni']=$this->db->query("select count(id_alumni) as total_alumni from alumni")->row();
			$data['lamaran']=$this->db->query("select count(id_lamaran) as total_lamaran from lamaran")->row();
			$this->load->view('layouts/head_admin.php');
			$this->load->view('admin/index',$data);
			$this->load->view('layouts/foot.php');
		}
		else{
			redirect('homepage/index');
		}
		
	}
	public function user(){
		$id_user=$this->input->post('id_user');
		$data['user']=$this->db->where('role','alumni')
		->or_where('role','perusahaan')->get('user')->result();
		$this->load->view('layouts/head_admin.php');
		$this->load->view('admin/user/index',$data);
		$this->load->view('layouts/foot.php');
		
	}
	public function user_detail($id_user){
		$data['user']=$this->db->where('id_user',$id_user)->get('user')->row();
		$data['alumni']=$this->db->where('id_user',$id_user)->get('alumni')->row();
		$data['perusahaan']=$this->db->where('id_user',$id_user)->get('perusahaan')->row();
		if ($data['user'] or $data['alumni'] or $data['perusahaan']) {
			$this->load->view('layouts/head_admin.php');
			$this->load->view('admin/user/detail',$data);
			$this->load->view('layouts/foot.php');
		}
		else{
			redirect('admin/user');
		}
		
	}

}
