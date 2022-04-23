<?php
class Homepage extends CI_Controller
{
	function __construct(){
        parent::__construct();
        //load libary pagination
        $this->load->library('pagination');
 
        //load the department_model
        $this->load->model('M_Post');
    }

	public function index()
	{
		$config['base_url'] = site_url('homepage/index'); //site url
        $config['total_rows'] = $this->db->count_all('berita'); //total row
        $config['per_page'] = 3;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      	$config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->M_Post->get_post_list($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();
 
        //load view mahasiswa view
		$this->load->view('clients/layouts/header.php');
		$this->load->view('clients/index.php',$data);
		$this->load->view('clients/layouts/footer.php');

	}

	
	public function dashboard_example()
	{
		$this->load->view('layouts/head.php');
		$this->load->view('home_example.php');
		$this->load->view('layouts/foot.php');
	}
	public function tentang_kami(){
		$this->load->view('clients/layouts/header.php');
		$this->load->view('clients/tentang_kami.php');
		$this->load->view('clients/layouts/footer.php');
		

	}
	public function lowongan(){
		$data['lowongan'] = $this->db
		->join('perusahaan','perusahaan.id_perusahaan=lowongan.id_perusahaan')
		->get('lowongan')->result();
		$this->load->view('clients/layouts/header.php');
		$this->load->view('clients/lowongan.php',$data);
		$this->load->view('clients/layouts/footer.php');

	}

	public function lowongan_detail($id){
		$data['lowongan'] = $this->db
		->join('perusahaan','perusahaan.id_perusahaan=lowongan.id_perusahaan')
		->where('id_lowongan',$id)
		->get('lowongan')->row();
		$this->load->view('clients/layouts/header.php');
		$this->load->view('clients/lowongan-detail.php',$data);
		$this->load->view('clients/layouts/footer.php');

	}
	public function struktur(){
		$data['struktur'] = $this->db->order_by('created_at','asc')->get('struktur')->result();
		$this->load->view('clients/layouts/header.php');
		$this->load->view('clients/struktur.php',$data);
		$this->load->view('clients/layouts/footer.php');

	}
	public function mitra(){
		$data['mitra'] = $this->db->get('perusahaan')->result();
		$this->load->view('clients/layouts/header.php');
		$this->load->view('clients/mitra.php',$data);
		$this->load->view('clients/layouts/footer.php');
		

	}
}
