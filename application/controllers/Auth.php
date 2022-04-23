<?php
class Auth extends CI_Controller{
	public function __construct(){
    parent::__construct();
    $this->load->model('M_Login','model');
  }
 
	public function index(){
    $this->load->view('login_view');
  }
 
	public function login(){
    $username    = $this->input->post('username');
    $password 	 = md5($this->input->post('password'));
    $validate= $this->model->validasi_login($username,$password,'user');
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $name  = $data['username'];
        $level = $data['role'];
        $sesdata = array(
						'id_user'=> $data['id_user'],
            'username'  => $name,
            'role'     => $level,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        // access login for admin
        if($level === 'admin'){
            redirect('admin/index');
 
        // access login for staff
        }elseif($level === 'alumni'){
            redirect('alumni/index');
 
        // access login for author
        }else{
            redirect('page/author');
        }
    }
		else{
        echo $this->session->set_flashdata('msg','Username atau Password salah');
        redirect('auth/index');
    }
  }
 
	public function logout(){
			echo $this->session->set_flashdata('msg', '<p>Silahkan Login</p>' );
      $this->session->sess_destroy();
      redirect('auth/index');
  }
 
}
