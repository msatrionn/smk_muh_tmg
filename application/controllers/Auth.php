<?php
class Auth extends CI_Controller{
	public function __construct(){
    parent::__construct();
    $this->load->model('M_Login','model');
  }
 
	public function index(){
		if ($this->session->userdata('id_user') != null) {
			if ($this->session->userdata('role') == "admin") {
				redirect('admin/index');
			}
			elseif ($this->session->userdata('role') == "alumni") {
				redirect('alumni/index');
			}elseif ($this->session->userdata('role') == "perusahaan") {
				redirect('perusahaan/index');
			}else{
				return redirect('auth/index');
			}

		}
		else{
			$this->load->view('login_view');
			$this->session->sess_destroy();
			
		}
  }
	public function register(){

		$this->session->set_flashdata('msg');
    $this->load->view('register_view');
  }
	public function register_save(){
		$user=$this->db->where('username',$this->input->post('nama_user'))->get('user')->row();
		$user_data=$this->db->select_max('id_user')->get('user')->row()->id_user+1;
		
		if ($this->input->post('role')=='alumni'  && $user == null) {
			$data=[
				'username'=>$this->input->post('username'),
				'nama_user'=>$this->input->post('nama_user'),
				'password'=>md5($this->input->post('password')),
				'role'=>$this->input->post('role'),
			];
			$this->model->save_registrasi_data('user', $data);
			$data_alumni = [
				'id_user'=>$user_data,
				'nama_alumni' => $this->input->post('nama_user'),
				];
				$this->db->insert('alumni', $data_alumni);
			echo $this->session->set_flashdata('msg','Registrasi berhasil');
			redirect('auth/index');
		}
		elseif($this->input->post('role')=='perusahaan'   && $user == null){
			$data=[
				'username'=>$this->input->post('username'),
				'nama_user'=>$this->input->post('nama_user'),
				'password'=>md5($this->input->post('password')),
				'role'=>$this->input->post('role'),
			];
			$this->model->save_registrasi_data('user', $data);
			$data_alumni = [
				'id_user'=>$user_data,
				'nama_perusahaan' => $this->input->post('nama_user'),
				];
				$this->db->insert('perusahaan', $data_alumni);
			echo $this->session->set_flashdata('msg','Registrasi berhasil');
			redirect('auth/index');
		}
		else{
		echo $this->session->set_flashdata('msg','Registrasi Gagal, User sudah terdaftar');
		redirect('auth/index');
		}
		
		
  }
 
	public function login(){
    $username    = $this->input->post('username');
    $password 	 = md5($this->input->post('password'));
    $validate= $this->model->validasi_login($username,$password,'user');
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $name  = $data['username'];
        $nama_user  = $data['nama_user'];
        $level = $data['role'];
				var_dump($data);
        $sesdata = array(
						'id_user'=> $data['id_user'],
            'username'  => $name,
            'nama_user'  => $nama_user,
            'role'     => $level,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        // access login for admin
        if($level === 'admin' ){
            redirect('admin/index');
 
        // access login for staff
        }elseif($level === 'alumni'){
            redirect('alumni/index');
 
        // access login for author
        }else{
            redirect('auth/index');
        }
    }
		else{
        echo $this->session->set_flashdata('msg','Username atau Password salah');
        redirect('auth/index');
    }
  }
 
	public function hapus_akun(){
		
		$role=$this->input->post('role');
		$id_user=$this->input->post('id_user');
	
		if ($role=='perusahaan') {
			$data['perusahaan']=$this->db->where('id_user',$id_user)->get('perusahaan')->row();
			if(file_exists($lok=FCPATH.'/file/perusahaan/'.$data['perusahaan']->foto_perusahaan)){
				unlink(FCPATH.'/file/perusahaan/'.$data['perusahaan']->foto_perusahaan);
				$this->db->where('id_user', $id_user)->delete('perusahaan');
			}
			
			else{
				$this->db->where('id_user', $id_user)->delete('perusahaan');
			}
		}
		elseif ($role=='alumni' ) {
			$data['alumni']=$this->db->where('id_user',$id_user)->get('alumni')->row();
			if(file_exists($lok=FCPATH.'/file/alumni/'.$data['alumni']->foto_alumni)){
				unlink(FCPATH.'/file/alumni/'.$data['alumni']->foto_alumni);
				$this->db->where('id_user', $id_user)->delete('alumni');
			}
			
			else{
				$this->db->where('id_user', $id_user)->delete('alumni');
			}
		}
	
		$this->db->where('id_user', $id_user)->delete('user');
		return redirect('admin/user');
}

	public function logout(){
			echo $this->session->set_flashdata('msg', '<p>Silahkan Login</p>' );
      $this->session->sess_destroy();
      redirect('auth/index');
  }
 
}
